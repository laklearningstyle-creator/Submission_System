@extends('layouts.app')

@section('content')
<h3>My Results</h3>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Assignment</th>
            <th>Score</th>
            <th>Grade</th>
            <th>Feedback</th>
        </tr>
    </thead>

    <tbody>
        @foreach($grades as $grade)
        <tr>
            <td>{{ $grade->submission->assignment->title }}</td>
            <td>{{ $grade->marks_obtained }}</td>
            <td>{{ $grade->grade }}</td>
            <td>{{ $grade->submission->feedback->comment ?? 'No feedback yet' }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection