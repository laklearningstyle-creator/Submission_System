@extends('layouts.app')

@section('content')
<h3>Student Submissions</h3>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Student</th>
            <th>Assignment</th>
            <th>File</th>
            <th>Late</th>
            <th>Status</th>
            <th>Grade</th>
        </tr>
    </thead>

    <tbody>
        @foreach($submissions as $submission)
        <tr>
            <td>{{ $submission->student->name }}</td>
            <td>{{ $submission->assignment->title }}</td>
            <td>
                <a href="{{ asset('storage/' . $submission->file_path) }}" target="_blank">
                    View File
                </a>
            </td>
            <td>{{ $submission->is_late ? 'Yes' : 'No' }}</td>
            <td>{{ $submission->status }}</td>
            <td>
                <form method="POST" action="/grades">
                    @csrf

                    <input type="hidden" name="submission_id" value="{{ $submission->id }}">

                    <input type="number" name="marks_obtained" class="form-control mb-2" placeholder="Score">

                    <select name="grade" class="form-control mb-2">
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="F">F</option>
                    </select>

                    <textarea name="comment" class="form-control mb-2" placeholder="Feedback"></textarea>

                    <button type="submit" class="btn btn-primary btn-sm">Save</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
