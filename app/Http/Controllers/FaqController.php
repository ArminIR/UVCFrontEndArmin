<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;
use Illuminate\View\View;

class FaqController
{
    public function index(): View
    {

        return view('faq', [
            'faqs' => Faq::all()
        ]);

    }

    public function show(Faq $faq): View
    {
        return view('faqs', [
            'faq' => $faq
        ]);
    }
    public function create()
    {
        return view('faqs.create');
    }

    public function store(Request $request)
    {
        Faq::create($this->validateFaq($request));

        return redirect('/faqs')->with('success', 'Faq is succesvol toegevoegd.');
    }

    public function edit(Faq $faq)
    {
        return view('faqs.edit', [
            'faq' => $faq
        ]);
    }

    public function update(Request $request, Faq $faq)
    {
       $faq->update($this->validateFaq($request));

        return redirect('/faqs/' . $faq->id);
    }

    public function destroy(Faq $faq)
    {
        $faq->delete();

        return redirect('/faqs/');
    }

    protected function validateFaq(Request $request)
    {
        return $request->validate([
            'question' => 'required',
            'answer' => 'required',
            'link' => 'nullable|active_url'
        ]);
    }
}
