<?php

namespace App\Http\Controllers;

class WelcomeController
{
    public function show(): string
    {
        return view('welcome');
    }
}
