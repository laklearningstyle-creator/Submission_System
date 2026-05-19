<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Assignment;
use App\Models\Feedback;

class Submission extends Model
{
    protected $fillable = [
        'assignment_id',
        'student_id',
        'submission_text',
        'file_path',
        'is_late',
        'status'
    ];

    public function student()
    {
        return $this->belongsTo(User::class, 'student_id');
    }

    public function assignment()
    {
        return $this->belongsTo(Assignment::class);
    }

    public function feedback()
    {
        return $this->hasOne(Feedback::class);
    }
}