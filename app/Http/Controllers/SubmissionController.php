<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Assignment;
use App\Models\Submission;

class SubmissionController extends Controller
{
    public function index()
    {
        $submissions = Submission::with(['student', 'assignment'])->get();

        return view('teacher.submissions', compact('submissions'));
    }

    public function create($id)
    {
        $assignment = Assignment::findOrFail($id);

        return view('student.upload_assignment', compact('assignment'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'assignment_id' => 'required',
            'file' => 'required|mimes:pdf,doc,docx,zip,png,jpg|max:10240',
        ]);

        $assignment = Assignment::findOrFail($request->assignment_id);

        $isLate = now()->greaterThan($assignment->due_date);

        if ($isLate && !$assignment->allow_late_submission) {
            return back()->with('error', 'Deadline has passed. Late submission is not allowed.');
        }

        $filePath = $request->file('file')->store('submissions', 'public');

        Submission::create([
            'assignment_id' => $request->assignment_id,
            'student_id' => auth()->id(),
            'submission_text' => $request->submission_text,
            'file_path' => $filePath,
            'is_late' => $isLate,
            'status' => 'Submitted',
        ]);

        return redirect('/student/assignments')->with('success', 'Assignment submitted successfully.');
    }
}