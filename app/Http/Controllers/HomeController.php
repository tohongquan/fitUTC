<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $articles = Article::latest('created_at')->get();
        $category = Category::all();
        return view('users.home')->with('articles', $articles)->with('categories', $category);
    }
}
