<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class BlogController extends Controller
{
    public function index()
    {
        $articles = Article::orderBy('id', 'desc')->get();
        return view('guest.index', compact('articles'));
    }

    public function edit(Request $request)
    {
        $article = Article::find($request->edit_id);
        return view('guest.edit', compact('article'));
    }
    public function create(Request $request)
    {
        $article = new \App\Models\Article();
        $article->title = $request->title;
        $article->body = $request->body;
        $article->save();

        return redirect('/');
    }
    public function delete(Request $request)
    {
        $article = \App\Models\Article::find($request->delete_id);
        return view('guest.delete', compact('article'));
    }

}
