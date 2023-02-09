<?php

namespace App\Http\Controllers;

class ProfileController
{
    public function show(): string
    {
        return view('profile');
    }
}
