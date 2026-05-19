@extends('layouts.app')

@section('content')
<h3>Create Assignment</h3>

<form method="POST" action="/assignments">
    @csrf

    <div class="mb-3">
        <label>Course</label>
        <select name="course_id" class="form-control" required>
            <option value="">Select Course</option>
            @foreach($courses as $course)
                <option value="{{ $course->id }}">{{ $course->course_name }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label>Assignment Title</label>
        <input type="text" name="title" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Description</label>
        <textarea name="description" class="form-control" required></textarea>
    </div>

    <div class="mb-3">
        <label>Total Marks</label>
        <input type="number" name="total_marks" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Start Date</label>
        <input type="datetime-local" name="start_date" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Due Date</label>
        <input type="datetime-local" name="due_date" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>
            <input type="checkbox" name="allow_late_submission" value="1">
            Allow Late Submission
        </label>
    </div>

    <button type="submit" class="btn btn-primary">Create Assignment</button>
</form>
@endsection