<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GradeController extends Controller
{
    public function show(): string
    {
        return view('grades');
    }
}
