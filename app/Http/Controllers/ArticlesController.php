<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;
use App\Http\Requests\ArticleRequest;

class ArticlesController extends Controller
{
    //
    public function index() {
    	// $articles = Article::all();
        $articles = Article::orderBy('id', 'desc')->get();
    	return view('articles.index', compact('articles'));
    }

    public function show($id) {
    	$article = Article::findOrFail($id);
    	return view('articles.show', compact('article'));
    }

    public function destroy($id) {
        $article = Article::findOrFail($id);

        $article->delete();
        \Session::flash('flash_message','article deleted!');

        return redirect('articles');
    }

    public function create() {
    	return view('articles.create');
    }

    public function store(ArticleRequest $request) {
        Article::create($request->all());

        return redirect('articles');
    }
}
