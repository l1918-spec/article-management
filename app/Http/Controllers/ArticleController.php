<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    // Display a listing of articles
    public function index()
    {
        $articles = Article::all();
        return view('articles.index', compact('articles'));
    }

    // Show the form for creating a new article
    public function create()
    {
        return view('articles.create');
    }

    // Store a newly created article
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        Article::create($request->all());
        return redirect()->route('articles.index')->with('success', 'Article created successfully.');
    }

    // Show the form for editing an article
    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.edit', compact('article'));
    }

    // Update the specified article
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $article = Article::findOrFail($id);
        $article->update($request->all());
        return redirect()->route('articles.index')->with('success', 'Article updated successfully.');
    }

    // Remove the specified article
    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();
        return redirect()->route('articles.index')->with('success', 'Article deleted successfully.');
    }
}