<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\View\View;

class WelcomeController
{
    public function show(): View {
        return view('welcome');
    }
}
