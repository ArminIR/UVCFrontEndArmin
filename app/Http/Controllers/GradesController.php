<?php

namespace App\Http\Controllers;

use App\Models\grades;
use Illuminate\Http\Request;
use Illuminate\View\View;

class GradesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
    {
        $totalEC = 0;
        $myEc = 0;
        foreach (grades::all() as $test) {
            $totalEC += $test->ec;
            if ($test->best_grade >= $test->lowest_passing_grade) {
                $myEc += $test->ec;
            }
        }
        $progress = round(($myEc / $totalEC) * 100,2 );
        return view('grades.index', [
            'grades' => grades::all(),
            'myEC' => $myEc,
            'progress' => $progress
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(): View
    {
        return view('grades.create', [
            'grades' => grades::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {
        grades::create(
            $request->validate($this->getGradeValidation())
        );
        return redirect(route('grades.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\grades  $grade
     * @return \Illuminate\Http\Response
     */
    public function show(grades $grade): View
    {
        return view('grades.show', [
            'grades' => $grade
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\grades  $grade
     * @return \Illuminate\Http\Response
     */
    public function edit(grades $grade) : View
    {
        return view('grades.edit', [
            'grade' => $grade
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\grades  $grade
     */
    public function update(Request $request, grades $grade)
    {
        $grade->update(
            $request->validate($this->getGradeValidation())
        );
        return redirect(route('grades.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\grades  $grade
     */
    public function destroy(grades $grade)
    {
        // Deletes the given resource
        $grade->delete();
        return redirect(route('grades.index'));
    }
    private function getGradeValidation() {
        return [
            'course_name' => 'required',
            'test_name' => 'required',
            'ec' => ['required', 'min:0.0'],
            'lowest_passing_grade' => ['nullable', 'min:0.0', 'max:10.0'],
            'best_grade' => ['nullable', 'min:0.0', 'max:10.0'],
        ];
    }
}
