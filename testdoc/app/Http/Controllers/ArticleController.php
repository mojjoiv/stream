<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index() {
        return Article::all();
    }

    public function show($id){
        return Article::find($id);
    }

    public function store(Request $request, $id){

        $article = Article::findOrFail($id);
        $article-> update($request->all());

        return $article();
    }

    public function update(Request $request, Article $article)
    {
        // $article = Article::findOrFail($id);
        
        $data = $request->only($article->getFillable());

        $article -> fill($data)->update();

        return $article;
    }

    public function delete(Request$request, $id){
        $article = Article::findOrFail($id);
        $article -> delete();

        return 204;
    }
}
