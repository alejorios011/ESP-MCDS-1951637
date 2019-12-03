<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['welcome']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function welcome() {
        $arts = Article::orderBy('id', 'desc')->take(5)->get();
        $cats = Category::all();
        $artsbycats = Article::all();
        return view('welcome')->with('arts', $arts)
                              ->with('cats', $cats)
                              ->with('artsbycats', $artsbycats);
    }
}
