<?php

namespace App\Providers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator; // Import the Validator facade
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
        Validator::extend('lowercase', function ($attribute, $value, $parameters, $validator) {
            return strtolower($value) === $value;
        });
    }
}
