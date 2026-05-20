<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\Webinar;
use App\User;

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
}
