@extends('layouts.app')

@section('content')

<div class="row">

    <div class="col-md-3 col-lg-2 mb-3">
        <div class="card shadow border-0 rounded-4">
            <div class="card-body">
                <h5 class="fw-bold text-primary mb-4">Dashboard</h5>

                <a href="/dashboard" class="btn btn-primary w-100 mb-2">Dashboard</a>
                <a href="/student/assignments" class="btn btn-outline-primary w-100 mb-2">Assignments</a>
                <a href="/submissions" class="btn btn-outline-primary w-100 mb-2">Submissions</a>
                <a href="/student/results" class="btn btn-outline-primary w-100 mb-2">Grades</a>
                <a href="/assignments/create" class="btn btn-outline-primary w-100 mb-2">Create Assignment</a>
            </div>
        </div>
    </div>

    <div class="col-md-9 col-lg-10">

        <h3 class="fw-bold mb-4">Student Dashboard</h3>

        <div class="row mb-4">
            <div class="col-md-3 mb-3">
                <div class="card shadow border-0 rounded-4">
                    <div class="card-body text-center">
                        <h3 class="text-primary fw-bold">{{ $totalAssignments ?? 5 }}</h3>
                        <p class="mb-0">Assignments</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-3">
                <div class="card shadow border-0 rounded-4">
                    <div class="card-body text-center">
                        <h3 class="text-success fw-bold">{{ $totalSubmissions ?? 4 }}</h3>
                        <p class="mb-0">Submitted</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-3">
                <div class="card shadow border-0 rounded-4">
                    <div class="card-body text-center">
                        <h3 class="text-danger fw-bold">2</h3>
                        <p class="mb-0">Pending</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-3">
                <div class="card shadow border-0 rounded-4">
                    <div class="card-body text-center">
                        <h3 class="text-warning fw-bold">90%</h3>
                        <p class="mb-0">Average</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card shadow border-0 rounded-4 mb-4">
            <div class="card-body">
                <h5 class="fw-bold mb-3">Quick Actions</h5>

                <a href="/student/assignments" class="btn btn-success me-2 mb-2">View Assignments</a>
                <a href="/student/results" class="btn btn-warning me-2 mb-2">View Grades</a>
                <a href="/assignments/create" class="btn btn-primary me-2 mb-2">Create Assignment</a>
                <a href="/submissions" class="btn btn-secondary me-2 mb-2">View Submissions</a>
            </div>
        </div>

        <div class="card shadow border-0 rounded-4">
            <div class="card-body">
                <div class="d-flex justify-content-between mb-3">
                    <h5 class="fw-bold">Recent Assignments</h5>
                    <a href="/student/assignments" class="btn btn-sm btn-outline-primary">View All</a>
                </div>

                <table class="table table-hover">
                    <thead class="table-primary">
                        <tr>
                            <th>Title</th>
                            <th>Due Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>Web Development Project</td>
                            <td>25 May 2026</td>
                            <td><span class="badge bg-success">Active</span></td>
                            <td><a href="/student/assignments" class="btn btn-sm btn-primary">View</a></td>
                        </tr>

                        <tr>
                            <td>Database Design</td>
                            <td>30 May 2026</td>
                            <td><span class="badge bg-warning">Pending</span></td>
                            <td><a href="/student/assignments" class="btn btn-sm btn-primary">View</a></td>
                        </tr>

                        <tr>
                            <td>Operating System Report</td>
                            <td>02 June 2026</td>
                            <td><span class="badge bg-success">Active</span></td>
                            <td><a href="/student/assignments" class="btn btn-sm btn-primary">View</a></td>
                        </tr>

                        <tr>
                            <td>AI Research Paper</td>
                            <td>10 June 2026</td>
                            <td><span class="badge bg-info">Upcoming</span></td>
                            <td><a href="/student/assignments" class="btn btn-sm btn-primary">View</a></td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>

    </div>
</div>

@endsection