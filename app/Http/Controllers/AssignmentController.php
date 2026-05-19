<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Assignment;

class AssignmentController extends Controller
{
    public function create()
    {
        $courses = Course::all();

        return view('teacher.create_assignment', compact('courses'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'course_id' => 'required',
            'title' => 'required',
            'description' => 'required',
            'total_marks' => 'required',
            'start_date' => 'required',
            'due_date' => 'required',
        ]);

        Assignment::create([
            'course_id' => $request->course_id,
            'title' => $request->title,
            'description' => $request->description,
            'total_marks' => $request->total_marks,
            'start_date' => $request->start_date,
            'due_date' => $request->due_date,
            'allow_late_submission' => $request->allow_late_submission ?? 0,
            'status' => 'Published',
        ]);

        return redirect('/dashboard')->with('success', 'Assignment created successfully.');
    }

    public function studentAssignments()
    {
        $assignments = Assignment::all();

        return view('student.assignments', compact('assignments'));
    }
}