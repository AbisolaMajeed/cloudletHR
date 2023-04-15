<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Feedback;
use App\Models\Image;
use App\Models\Newsletter;
use App\Models\Team;
use App\Models\User;
use App\Models\Video;

class AdminDashboardController extends Controller
{
    public function viewDashboard()
    {
        $blogs = Blog::count();
        $images = Image::count();
        $videos = Video::count();
        $users = User::count();
        $activefeedbacks = Feedback::count();
        $inactivefeedbacks = Feedback::onlyTrashed()->count();
        $newsletters = Newsletter::count();
        $teams = Team::count();

        return view('/dashboard', compact(
            'blogs',
            'images',
            'videos',
            'users',
            'activefeedbacks',
            'inactivefeedbacks',
            'newsletters',
            'teams'
        ));
    }
}
