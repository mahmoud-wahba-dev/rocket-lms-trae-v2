<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\Webinar;
use App\User;
use App\Models\Sale;

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
}

