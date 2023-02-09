<?php

namespace App\Http\Controllers;
use App\Models\Faq;
use Illuminate\View\View;

class FaqController
{
    public function show(): View
    {

        return view('faq', [
            'faqs' => Faq::all()
        ]);
    }
}
