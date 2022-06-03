<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;

class CategoryController extends Controller
{


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::findOrFail($id);

        if($category){
            $articles = Article::where('Category_id',$id)->get();

//            return view('users.article_category', compact('articles'));
            return view('users.article_category')->with('articles', $articles)->with('category', $category);
        }

//        return view('errors.404');
    }

}
