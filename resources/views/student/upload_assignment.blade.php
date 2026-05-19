@extends('layouts.app')

@section('content')
<h3>Upload Assignment</h3>

<div class="card p-3 mb-3">
    <h5>{{ $assignment->title }}</h5>
    <p>{{ $assignment->description }}</p>
    <p><b>Deadline:</b> {{ $assignment->due_date }}</p>
</div>

<form method="POST" action="/submissions" enctype="multipart/form-data">
    @csrf

    <input type="hidden" name="assignment_id" value="{{ $assignment->id }}">

    <div class="mb-3">
        <label>Submission Text</label>
        <textarea name="submission_text" class="form-control"></textarea>
    </div>

    <div class="mb-3">
        <label>Upload File</label>
        <input type="file" name="file" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-success">Submit Assignment</button>
</form>
@endsection