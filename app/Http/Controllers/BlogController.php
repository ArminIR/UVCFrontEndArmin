<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\View\View;

class BlogController
{
    public function show(): View
    {
        return view('blog');
    }
}
