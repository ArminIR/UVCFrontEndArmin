<?php

namespace App\Http\Controllers;

use App\Models\grades;

class DashboardController
{
    public function show(): string
    {
        return view('dashboard', [
            'grades' => grades::all()
        ]);
    }
}
