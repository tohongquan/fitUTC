<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

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
        $articles = Article::latest('created_at')->paginate(2);
        $mainArticle = DB::table('articles')->where('status','=','0')->first();
        $category = Category::all();
        return view('users.home')->with('articles', $articles)->with('mainArticle', $mainArticle)->with('categories', $category);
    }
}
