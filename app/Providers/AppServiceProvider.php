<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Pagination\Paginator;
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
        view()->composer('layouts.sitebar', function($view){
            $view->with('popular_posts', Post::orderBy('views', 'desc')->limit(5)->get());
            $view->with('cats', Category::withCount('posts')->orderBy('posts_count', 'desc')->get());
            $view->with('tags_posts', Tag::limit(10)->get());
        });
        Paginator::useBootstrap();
    }
}
