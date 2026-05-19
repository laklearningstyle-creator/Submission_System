<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Assignment;
use App\Models\Submission;

class DashboardController extends Controller
{
    public function index()
    {
        $userCount = User::count();
        $assignmentCount = Assignment::count();
        $submissionCount = Submission::count();

        return view('dashboard', compact(
            'userCount', 
            'assignmentCount', 
            'submissionCount'
        ));
    }
}
