<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\View\View;
use Illuminate\Http\Request;

class ArticlesController
{
    public function index()
    {
        return view('blog', [
            'articles' => Article::all()
        ]);

    }
    public function show(Article $blog): View
    {
        return view ('articles.show', ['article' =>$blog]);
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {

        Article::create($this->validateArticle($request));

        return redirect('/blogs');
    }

    public function edit(Article $blog)
    {
        return view('articles.edit',
            ['blog' => $blog]);
    }

    public function update(Request $request, Article $blog)
    {
        $blog->update($this->validateArticle($request));

        return redirect('/blogs/' . $blog->id);
    }

    public function destroy(Article $blog)
    {

        $blog->delete();

        return redirect('/blogs/');
    }

    protected function validateArticle(Request $request)
    {
        return $request->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]);
    }
}
