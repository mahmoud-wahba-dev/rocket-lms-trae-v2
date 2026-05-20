<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\Webinar;
use App\User;
use App\Models\Sale;
use App\Models\Category;
use Illuminate\Http\Request;

class LandingV1Controller extends Controller
{
    public function index()
    {
        $trainers = User::query()
            ->select('id', 'full_name', 'username', 'avatar', 'avatar_settings', 'bio', 'headline', 'about')
            ->where('role_name', Role::$teacher)
            ->where('status', 'active')
            ->orderByDesc('id')
            ->limit(5)
            ->get();

        $courses = Webinar::where('status', 'active')
            ->where('private', false)
            ->with('teacher:id,full_name,avatar,avatar_settings')
            ->orderByDesc('id')
            ->limit(8)
            ->get();

        $data = [
            'pageTitle' => trans('home.home_title'),
            'trainers' => $trainers,
            'instructors' => $trainers,
            'courses' => $courses,
        ];

        return view('landing_v1.pages.home', $data);
    }

    public function instructors()
    {
        $instructors = User::query()
            ->select('id', 'full_name', 'username', 'avatar', 'avatar_settings', 'bio', 'headline', 'about', 'created_at')
            ->where('role_name', Role::$teacher)
            ->where('status', 'active')
            ->orderByDesc('id')
            ->get();

        foreach ($instructors as $instructor) {
            $instructor->courses_count = Webinar::where('status', 'active')
                ->where(function ($query) use ($instructor) {
                    $query->where('creator_id', $instructor->id)
                        ->orWhere('teacher_id', $instructor->id);
                })
                ->count();
            
            $instructor->students_count = Sale::where('seller_id', $instructor->id)
                ->whereNotNull('webinar_id')
                ->where('type', 'webinar')
                ->whereNull('refund_at')
                ->count();
        }

        $data = [
            'pageTitle' => trans('home.instructors'),
            'instructors' => $instructors,
        ];

        return view('landing_v1.pages.instructors', $data);
    }

    public function courses(Request $request)
    {
        // Get parent categories
        $categories = Category::whereNull('parent_id')
            ->where('enable', true)
            ->orderBy('order', 'asc')
            ->get();

        // Query webinars
        $query = Webinar::where('status', 'active')
            ->where('private', false)
            ->with('teacher:id,full_name,avatar,avatar_settings');

        // Filter by Category
        if ($request->filled('category_id')) {
            $categoryId = $request->input('category_id');
            $subCategoryIds = Category::where('parent_id', $categoryId)->pluck('id')->toArray();
            $query->whereIn('category_id', array_merge([$categoryId], $subCategoryIds));
        }

        // Filter by Course Type
        if ($request->filled('types') && is_array($request->input('types'))) {
            $types = $request->input('types');
            $query->where(function ($q) use ($types) {
                if (in_array('paid', $types)) {
                    $q->orWhere('price', '>', 0);
                }
                if (in_array('free', $types)) {
                    $q->orWhere(function ($sq) {
                        $sq->whereNull('price')->orWhere('price', 0);
                    });
                }
                if (in_array('free_with_paid_cert', $types)) {
                    $q->orWhere(function ($sq) {
                        $sq->where(function ($ssq) {
                            $ssq->whereNull('price')->orWhere('price', 0);
                        })->where('certificate', 1);
                    });
                }
                if (in_array('has_cert', $types)) {
                    $q->orWhere('certificate', 1);
                }
            });
        }

        // Sort
        $sort = $request->input('sort', 'popular');
        if ($sort == 'latest') {
            $query->orderByDesc('created_at');
        } elseif ($sort == 'oldest') {
            $query->orderBy('created_at');
        } else {
            // popular
            $query->orderByDesc('sales_count_number');
        }

        $courses = $query->get();

        if ($request->ajax()) {
            return response()->json([
                'html' => view('landing_v1.pages.courses_list', ['courses' => $courses])->render(),
                'count' => $courses->count()
            ]);
        }

        $data = [
            'pageTitle' => trans('home.courses'),
            'categories' => $categories,
            'courses' => $courses,
            'activeCategory' => $request->input('category_id', null)
        ];

        return view('landing_v1.pages.courses', $data);
    }

    public function courseDetails($slug = null)
    {
        // Try to fetch webinar by slug or fallback to the first active webinar if slug is missing or not found
        $course = null;
        if (!empty($slug)) {
            $course = Webinar::where('slug', $slug)
                ->where('status', 'active')
                ->where('private', false)
                ->with([
                    'teacher:id,full_name,avatar,avatar_settings,created_at,bio,headline',
                    'chapters' => function ($query) {
                        $query->where('status', 'active')
                            ->orderBy('order', 'asc');
                    },
                    'chapters.sessions' => function ($query) {
                        $query->where('status', 'active');
                    },
                    'chapters.files' => function ($query) {
                        $query->where('status', 'active');
                    },
                    'chapters.textLessons' => function ($query) {
                        $query->where('status', 'active');
                    },
                    'chapters.assignments' => function ($query) {
                        $query->where('status', 'active');
                    },
                    'chapters.quizzes' => function ($query) {
                        $query->where('status', 'active');
                    },
                ])
                ->first();
        }

        if (empty($course)) {
            $course = Webinar::where('status', 'active')
                ->where('private', false)
                ->with([
                    'teacher:id,full_name,avatar,avatar_settings,created_at,bio,headline',
                    'chapters' => function ($query) {
                        $query->where('status', 'active')
                            ->orderBy('order', 'asc');
                    },
                    'chapters.sessions' => function ($query) {
                        $query->where('status', 'active');
                    },
                    'chapters.files' => function ($query) {
                        $query->where('status', 'active');
                    },
                    'chapters.textLessons' => function ($query) {
                        $query->where('status', 'active');
                    },
                    'chapters.assignments' => function ($query) {
                        $query->where('status', 'active');
                    },
                    'chapters.quizzes' => function ($query) {
                        $query->where('status', 'active');
                    },
                ])
                ->orderBy('id', 'asc')
                ->first();
        }

        if (empty($course)) {
            abort(404);
        }

        // Calculate dynamic instructor stats
        $teacher = $course->teacher;
        $teacher_courses_count = 0;
        $teacher_students_count = 0;
        if (!empty($teacher)) {
            $teacher_courses_count = Webinar::where('status', 'active')
                ->where(function ($query) use ($teacher) {
                    $query->where('creator_id', $teacher->id)
                        ->orWhere('teacher_id', $teacher->id);
                })
                ->count();

            $teacher_students_count = Sale::where('seller_id', $teacher->id)
                ->whereNotNull('webinar_id')
                ->where('type', 'webinar')
                ->whereNull('refund_at')
                ->count();
        }

        // Query target outcomes ("What you will learn")
        $learningMaterials = $course->webinarExtraDescription()
            ->where('type', \App\Models\WebinarExtraDescription::$LEARNING_MATERIALS)
            ->get();

        // Calculate dynamic reviews distribution
        $activeReviews = $course->reviews()->where('status', 'active')->get();
        $totalReviewsCount = $activeReviews->count();
        $ratesDistribution = [];
        for ($i = 5; $i >= 1; $i--) {
            $count = $activeReviews->where('rates', $i)->count();
            $percent = $totalReviewsCount > 0 ? ($count / $totalReviewsCount) * 100 : 0;
            $ratesDistribution[$i] = [
                'count' => $count,
                'percent' => $percent
            ];
        }

        $data = [
            'pageTitle' => $course->title,
            'course' => $course,
            'teacher_courses_count' => $teacher_courses_count,
            'teacher_students_count' => $teacher_students_count,
            'learningMaterials' => $learningMaterials,
            'ratesDistribution' => $ratesDistribution,
        ];

        return view('landing_v1.pages.course-details', $data);
    }
}

