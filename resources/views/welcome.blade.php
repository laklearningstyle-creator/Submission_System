<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment Submission System</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background: linear-gradient(135deg, #0d6efd, #6610f2); min-height: 100vh;">

<nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">Assignment System</a>

        <div>
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}" class="btn btn-light">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="btn btn-outline-light me-2">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-light">Register</a>
                    @endif
                @endauth
            @endif
        </div>
    </div>
</nav>

<div class="container d-flex align-items-center justify-content-center" style="min-height: 85vh;">
    <div class="row align-items-center text-white">

        <div class="col-md-6">
            <h1 class="display-4 fw-bold">
                Assignment Submission System
            </h1>

            <p class="lead mt-3">
                Online Assignment Upload, Grading, and Feedback System for students and teachers.
            </p>

            <p>
                Students can upload assignments online, while teachers can review submissions,
                give marks, and provide feedback easily.
            </p>

            <div class="mt-4">
                @guest
                    <a href="{{ route('login') }}" class="btn btn-light btn-lg me-2">Get Started</a>
                    <a href="{{ route('register') }}" class="btn btn-outline-light btn-lg">Create Account</a>
                @else
                    <a href="{{ url('/dashboard') }}" class="btn btn-light btn-lg">Go to Dashboard</a>
                @endguest
            </div>
        </div>

        <div class="col-md-6 mt-5 mt-md-0">
            <div class="card shadow-lg border-0 rounded-4 p-4">
                <div class="card-body text-dark">
                    <h4 class="fw-bold mb-4 text-primary">System Features</h4>

                    <div class="mb-3">
                        <h6 class="fw-bold">📤 Assignment Upload</h6>
                        <p class="text-muted mb-0">Students can submit assignment files online.</p>
                    </div>

                    <div class="mb-3">
                        <h6 class="fw-bold">📝 Grading System</h6>
                        <p class="text-muted mb-0">Teachers can give scores and grades.</p>
                    </div>

                    <div class="mb-3">
                        <h6 class="fw-bold">💬 Feedback</h6>
                        <p class="text-muted mb-0">Teachers can provide comments and reviews.</p>
                    </div>

                    <div class="mb-3">
                        <h6 class="fw-bold">📊 Dashboard Report</h6>
                        <p class="text-muted mb-0">Admin can view assignment and submission reports.</p>
                    </div>

                    <hr>

                    <div class="row text-center">
                        <div class="col-4">
                            <h5 class="fw-bold text-primary">Admin</h5>
                            <small>Manage</small>
                        </div>
                        <div class="col-4">
                            <h5 class="fw-bold text-success">Teacher</h5>
                            <small>Grade</small>
                        </div>
                        <div class="col-4">
                            <h5 class="fw-bold text-warning">Student</h5>
                            <small>Submit</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<footer class="text-center text-white pb-3">
    <small>© {{ date('Y') }} Assignment Submission System | Student Project</small>
</footer>

</body>
</html>