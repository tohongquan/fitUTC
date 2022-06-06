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
            $categories = DB::table('categories')->whereNull('parent_id')->get();
            $multiCategories = Category::has('children')->whereNull('parent_id')->get();
            $partnerCompanies = PartnerCompanies::all();
            $view->with(['categories' => $categories,'multiCategories' => $multiCategories,'partnerCompanies' => $partnerCompanies]);
        });
    }
}
