<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\View\View;

class ArticlesController
{
    public function index()
    {
       return view('blog', [
        'articles' => Article::all()
    ]);

    }
    public function show($id): View
    {
        $article = Article::find($id);
        return view ('articles.show', ['article' =>$article]);
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store()
    {
        $article = new Article();

        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');

        $article->save();

        return redirect('/blog');
    }

    public function edit($id)
    {
        $article = Article::find($id);

        return view('articles.edit', compact('article'));
    }

    public function update($id)
    {
        $article = Article::find($id);

        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');

        $article->save();

        return redirect('/blog/' . $article->id);
    }

    public function destroy($id)
    {
        $article = Article::find($id);

        $article->delete();

        return redirect('/blog/');
    }
}
