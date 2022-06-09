<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\PartnerCompanies;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;

class CategoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        view()->composer('layouts.app', function($view) {
            $categories = Category::with('children')->whereNull('parent_id')->get();
            $partnerCompanies = PartnerCompanies::all();
            $view->with(['categories' => $categories,'partnerCompanies' => $partnerCompanies]);
        });
    }
}
