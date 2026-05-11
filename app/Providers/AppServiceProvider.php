<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Service;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $views = ['layouts.frontend.header', 'layouts.frontend.footer'];
        View::composer($views, function ($view) {
            $view->with('header_services', Service::where('status', 'active')->get());
        });
    }
}
