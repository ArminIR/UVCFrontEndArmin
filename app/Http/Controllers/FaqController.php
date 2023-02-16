<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\View\View;

class FaqController
{
    public function index(): View
    {

        return view('faq', [
            'faqs' => Faq::all()
        ]);

    }

    public function show($id): View
    {
        return view('faqs', [
            'faq' => Faq::find($id)
        ]);
    }
    public function create()
    {
        return view('faqs.create');
    }

    public function store()
    {
        $faq = new Faq();

        $faq->answer = request('answer');
        $faq->question = request('question');
        $faq->link = request('link');

        $faq->save();

        return redirect('/faq');
    }

    public function edit()
    {
        //Show a view to edit an existing resource
    }

    public function update()
    {
        //Persist the edit resource
    }

    public function destroy()
    {
        //Delete the resource
    }
}
