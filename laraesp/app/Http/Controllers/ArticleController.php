<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Article;
use App\Http\Requests\ArticleRequest;
use App\Category;
use PDF;

class ArticleController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arts = Article::all();
        //$arts = Article::orderBy('id', 'desc')->get();
        return view('articles.index')->with('arts', $arts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cats = Category::all();
        return view('articles.create')->with('cats', $cats);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    {
        $art = new Article;
        $art->name = $request->name;
        if($request->hasFile('image')) {
            $file = time().'.'.$request->image->extension();
            $request->image->move(public_path('imgs'), $file);
            $art->image  = "imgs/".$file;
       }
        $art->content     = $request->content;
        $art->category_id = $request->category_id;
        $art->user_id     = Auth::user()->id;

       if($art->save()) {
            return redirect('articles')->with('message', 'El Artículo '.$art->name.' fue creado con exito!');
       }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $art = Article::find($id);
        return view('articles.show')->with('art', $art);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $art = Article::find($id);
        $cats = Category::all();
        return view('articles.edit')->with('art', $art)
                                    ->with('cats', $cats);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(ArticleRequest $request, $id)
    {
        //dd($request->all());
        $art = Article::find($id);
        $art->name = $request->name;
        if($request->hasFile('image')) {
            $file = time().'.'.$request->image->extension();
            $request->image->move(public_path('imgs'), $file);
            $art->image  = "imgs/".$file;
       }
        $art->content     = $request->content;
        $art->category_id = $request->category_id;

       if($art->save()) {
            return redirect('articles')->with('message', 'El Artículo '.$art->name.' fue modificado con exito!');
       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $art = Article::find($id);
        if($art->delete()) {
            return redirect('articles')->with('message', 'El Artículo '.$art->name.' fue eliminado con exito!');
       }
    }

    // PDF
    public function pdf() {
        $arts = Article::all();
        $pdf = PDF::loadView('articles.pdf', compact('arts', $arts));
        return $pdf->download('articles.pdf');
    }
}
