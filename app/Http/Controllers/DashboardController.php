<?php

namespace App\Http\Controllers;

use App\Models\Grade;

class DashboardController
{
    public function show(): string
    {
        return view('dashboard', [
            'grades' => Grade::all()
        ]);
    }
}
