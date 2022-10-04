<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $articles = Articles::where('user_id', auth()->user()->id)->limit(30)->latest()->get();
        return view('post.home', compact('articles'));
    }

    public function detailArticle(Articles $article)
    {
        return view('post.detail-article', compact('article'));
    }
}
