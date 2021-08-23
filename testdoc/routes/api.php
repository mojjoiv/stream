<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Article;

Route::get('articles', function(){

    return Article::all();
});

Route::get('article/{id}', function($id){
   
    return Article::find($id);
});

Route::post('articles', function(Request $request){
    return Article::create($request->all);
});

Route::put('articles/{$id}', function(Request $request, $id){

    $article = Article::findOrFail($id);
    $article -> update($request->all());

    return $article;
});

Route::delete('articles/{id}', function($id){
  
    Article::find($id)-> delete();

    return 204;
});

Route::apiResource('articles', ArticleController::class);

