<?php

namespace App\Http\Controllers;
use App\Models\Post;

class PostsController extends Controller
{
    public function show($slug): string {

        return view('post', [
            'post' => Post::where('slug', $slug)->firstOrFail()
        ]);
    }
}
