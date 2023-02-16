<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\View\View;

class ArticlesController
{
    public function show($id): View
    {
        $article = Article::find($id);
        return view ('articles.show', ['article' =>$article]);
    }
}
