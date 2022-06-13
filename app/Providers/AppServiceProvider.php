<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\PartnerCompanies;
use App\Models\SubjectsSet;
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
        //
        view()->composer('layouts.app', function($view) {
            $categories = Category::with('children')->whereNull('parent_id')->get();
            $partnerCompanies = PartnerCompanies::where('visible_in_home_page','1')->get();
            $view->with(['categories' => $categories,'partnerCompanies' => $partnerCompanies]);
        });
    }
}
