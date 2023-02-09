<?php

namespace App\Http\Controllers;

class DashboardController
{
    public function show(): string
    {
        return view('dashboard');
    }
}
