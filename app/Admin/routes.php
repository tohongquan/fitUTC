<?php

use App\Admin\Controllers\CategoryController;
use App\Admin\Controllers\ArticleController;
use App\Admin\Controllers\AuthorController;
use App\Admin\Controllers\LecturersController;
use App\Admin\Controllers\PartnerCompaniesController;
use App\Admin\Controllers\SubjectsSetController;
use App\Admin\Controllers\UserController;
use App\Models\User;
use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('users', UserController::class);
    $router->resource('articles', ArticleController::class);
    $router->resource('categories', CategoryController::class);
    $router->resource('authors', AuthorController::class);
    $router->resource('subjects-sets', SubjectsSetController::class);
    $router->resource('lecturers', LecturersController::class);
    $router->resource('partner-companies', PartnerCompaniesController::class);
});
