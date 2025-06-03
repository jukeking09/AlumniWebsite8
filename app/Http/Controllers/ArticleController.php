<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('articles.index', compact('articles'));
    }

    public function create()
    {
        return view('articles.add');
    }

    public function store(Request $request)
    {

        $validator = Validator::make( $request->all(), [
            'article_title' => 'required|string|max:255',
            'article_description' => 'required|string',
            'article_path' => 'required|file|mimes:pdf,doc,docx',
            'article_image_path' => 'nullable|mimes:jpeg,jpg,png,webp|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $article = new Article();
        $article->article_title = $request->article_title;
        $article->article_description = $request->article_description;

        if ($request->hasFile('article_path')) {
            $path = $request->file('article_path')->store('articles', 'private');
            $article->article_path = $path;
        }


        if ($request->hasFile('article_image_path')) {
            $imagePath = $request->file('article_image_path')->store('articles/images', 'private');
            $article->article_image_path = $imagePath;
        }
        else{
            $article->article_image_path = 'articles/images/default-article.jpg';
        }

        $article->user_id = Auth::id();
        $article->save();

        return redirect()->route('articles')->with('success', 'Article created successfully.');
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);

        $filePath = storage_path('app/private/' . $article->article_path);

        if (!file_exists($filePath)) {
            abort(404, 'File not found');
        }

        return response()->file($filePath); // or ->download($filePath)
    }
    
    public function showImage($filename)
        {
            $path = storage_path('app/private/articles/images/' . $filename);

            if (!File::exists($path)) {
                abort(404);
            }

            return response()->file($path);
        }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.edit', compact('article'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'article_title' => 'required|string|max:255',
            'article_description' => 'required|string',
            'article_path' => 'nullable|file|mimes:pdf,doc,docx',
            'article_image_path' => 'nullable|mimes:jpeg,jpg,png,webp|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $article = Article::findOrFail($id);
        $article->article_title = $request->article_title;
        $article->article_description = $request->article_description;

        if ($request->hasFile('article_path')) {
            Storage::delete($article->article_path);
            $path = $request->file('article_path')->store('articles', 'private');
            $article->article_path = $path;
        }

        if ($request->hasFile('article_image_path')) {
            Storage::delete($article->article_image_path);
            $imagePath = $request->file('article_image_path')->store('articles/images', 'private');
            $article->article_image_path = $imagePath;
        }

        $article->save();

        return redirect()->route('articles')->with('success', 'Article updated successfully.');
    }

    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        Storage::delete($article->article_path);
        if ($article->article_image_path) {
            Storage::delete($article->article_image_path);
        }

        $article->delete();

        return redirect()->route('articles')->with('success', 'Article deleted successfully.');
    }

    public function myArticles()
    {
        $articles = Article::where('user_id', Auth::id())->get();
        return view('articles.myarticles', compact('articles'));
    }
}
