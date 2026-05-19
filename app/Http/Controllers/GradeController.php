<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grade;
use App\Models\Feedback;
use App\Models\Submission;

class GradeController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'submission_id' => 'required',
            'marks_obtained' => 'required',
            'grade' => 'required',
            'comment' => 'required',
        ]);

        Grade::create([
            'submission_id' => $request->submission_id,
            'marks_obtained' => $request->marks_obtained,
            'grade' => $request->grade,
            'graded_by' => auth()->id(),
        ]);

        Feedback::create([
            'submission_id' => $request->submission_id,
            'teacher_id' => auth()->id(),
            'comment' => $request->comment,
        ]);

        Submission::where('id', $request->submission_id)
            ->update(['status' => 'Graded']);

        return back()->with('success', 'Grade and feedback saved successfully.');
    }

    public function studentResults()
    {
        $grades = Grade::with(['submission.assignment', 'submission.feedback'])
            ->whereHas('submission', function ($query) {
                $query->where('student_id', auth()->id());
            })
            ->get();

        return view('student.results', compact('grades'));
    }
}