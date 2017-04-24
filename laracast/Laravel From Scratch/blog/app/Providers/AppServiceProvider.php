<?php

namespace App\Providers;
use \App\Billing\Stripe;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        // view composer -> show this variable in all views
        // we can create a class for this if we want
        // is a callback that is called when a view is rendering
        // name of the view loading

        view()->composer('layouts.sidebar', function($view){
            // $view->with('archives', \App\Post::archives());
            // // get the tags that has posts
            // $view->with('tags', \App\Tag::has('posts')->pluck('name'));

            $archives = \App\Post::archives();
            $tags = \App\Tag::has('posts')->pluck('name');
            $view->with(compact('archives', 'tags'));
        });




    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->singleton(Stripe::class, function(){
            return new Stripe(config('services.stripe.secret'));
        });

    }
}
