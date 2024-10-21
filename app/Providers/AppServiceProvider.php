<?php

namespace App\Providers;

use App\Models\Project;
use App\Models\Setting;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    private function setting()
    {
        return Setting::first();
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('front.partials.footer', function($view){
            
            $view->with([
                'setting' => $this->setting(),
                'projects' => Project::all(),
            ]);
        });

        View::composer('front.partials.navbar', function ($view) {
            $view->with('setting', $this->setting());
        });
    }
}
