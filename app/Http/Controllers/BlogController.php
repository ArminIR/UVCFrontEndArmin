<?php

namespace App\Http\Controllers;

class BlogController
{
    public function show(): string
    {
        return view('blog');

    }
}
