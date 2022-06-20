<?php

use App\Admin\Controllers\SubjectsSetController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LecturerController;
use App\Http\Controllers\PartnerCompanyController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource('/', HomeController::class);

Route::resource('home', HomeController::class);
Route::resource('articles', ArticleController::class);
Route::get('categories/{id}/articles',[CategoryController::class, 'show']);
Route::get('/search/',[ArticleController::class, 'search'])->name('search');
Route::get('lecturers',[LecturerController::class, 'index']);
Route::get('partner-companies',[PartnerCompanyController::class, 'index']);
