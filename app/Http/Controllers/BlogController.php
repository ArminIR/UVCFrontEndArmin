<?php

namespace App\Http\Controllers;

use App\Models\Article;

class BlogController
{
    public function show(): string
    {
        return view('blog', [
            'articles' => Article::take(7)->get()
        ]);

    }
}
