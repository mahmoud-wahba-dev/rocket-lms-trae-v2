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
}

