<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $articles=Article::orderBy('id','DESC')->paginate(5);
        //return view('article.index');
        return view('article.manage.index',compact('articles'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories=Category::get();
        return view('article.manage.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $articles=Article::create([
            'category_id'=>$request->category,
            'title'=>$request->title,
            'content'=>$request->content,

        ]);

        /*$articles = New Article();
        $articles->category_id = $request->category;
        $articles->title = $request->title;
        $articles->content = $request->content;
        $articles->save(); */
        return back()->with('success','upload data sukses');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $categories = Category::get();
        $articles = Article::find($id);
        return view('article.manage.edit', compact('categories','articles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $articles = Article::whereId($id)->first();
        $articles->update([
            'category_id'=>$request->category,
            'title'=>$request->title,
            'content'=>$request->content,
        ]);
        return back()->with('success','ubah data berhasil!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        //
        Article::whereId($id)->delete();
        return back()->with('success','Delete data berhasil!');
    }
}
