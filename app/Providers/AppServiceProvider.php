<?php

namespace App\Providers;

use App\Specialization;
use App\Profile;


use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;



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
        View::share('specializations', Specialization::orderBy('id','asc')->get());
        View::share('profile', Profile::orderBy('id','desc')->get());
    }
}
