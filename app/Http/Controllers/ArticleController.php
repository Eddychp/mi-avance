<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticlePostRequest;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{

    public function index(){
        $articles=Article::all();
        //return $schools;
        return response()->json($articles);
    }

    public function show(Article $article){
        return response()->download(public_path(Storage::url($article->file)), $article->title);
    }

    
    public function store(Request $request)
    {
        $article = request()->all();
        if ($request->hasFile('path')) {

            $destination_path = 'public';
            $file = $request->file('path');
            $file_name = $file->getClientOriginalName();
            $path = $request->file('path')->storeAs($destination_path, $file_name);
            $article['path'] = $file_name;
        }
        Article::create($article);
        return response()->json([
            'message' => "record saved successfully!",
            'article' => $article
        ], 200);
    }

    public function update(ArticlePostRequest $request, Article $article){
        $article->update($request->all());

        return response()->json([
            'message' => "record updated successfully!",
            'article' => $article
        ], 200);
    }

    public function destroy(Article $article){
        $article->delete();
        return response()->json([
            'message' => "record deleted successfully!",
        ], 200);
    }

}
