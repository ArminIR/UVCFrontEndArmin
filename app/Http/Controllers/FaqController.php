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

    public function edit($id)
    {
        $faq = Faq::find($id);

        return view('faqs.edit', compact('faq'));
    }

    public function update($id)
    {
        $faq = Faq::find($id);

        $faq->question = request('question');
        $faq->answer = request('answer');
        $faq->link = request('link');

        $faq->save();

        return redirect('/faq/' . $faq->id);
    }

    public function destroy($id)
    {
        $faq = Faq::find($id);

        $faq->delete();

        return redirect('/faq/');
    }
}
