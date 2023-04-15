<?php

namespace App\Providers;

use App\Models\Blog;
use App\Models\Team;
use App\Models\User;
use App\Models\Image;
use App\Models\Video;
use App\Models\Article;
use App\Models\Modules;
use App\Models\Setting;
use App\Models\Feedback;
use App\Models\Newsletter;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        if (! $this->app->runningInConsole()) {
        // App is not running in CLI context
        // Do HTTP-specific stuff here
            $feedback = Feedback::all();
            View::share('feedback', $feedback);

            $modules = Modules::all();
            View::share('modules', $modules); 

            $articles = Article::limit(3)->get();
            View::share('articles', $articles);

            $blogs = Blog::limit(5)->get();
            View::share('blogs', $blogs);
            
            $newsletters = Newsletter::all();
            View::share('newsletters', $newsletters);

            $images = Image::all();
            View::share('images', $images);

            $videos = Video::all();
            View::share('videos', $videos);

            $teams = Team::limit(6)->get();
            View::share('teams', $teams);

            $settings = Setting::where("name","CloudletHR")->first();
            View::share('settings', $settings);

            $users = User::all();
            View::share('users', $users);
        }

        Paginator::useBootstrap();
    }
}
