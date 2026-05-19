@extends('layouts.app')

@section('content')
<h3>My Assignments</h3>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Total Marks</th>
            <th>Due Date</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>
        @foreach($assignments as $assignment)
        <tr>
            <td>{{ $assignment->title }}</td>
            <td>{{ $assignment->description }}</td>
            <td>{{ $assignment->total_marks }}</td>
            <td>{{ $assignment->due_date }}</td>
            <td>
                <a href="/student/upload/{{ $assignment->id }}" class="btn btn-success btn-sm">
                    Upload
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection