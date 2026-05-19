<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Submission;

class Assignment extends Model
{
    protected $fillable = [
        'course_id',
        'title',
        'description',
        'total_marks',
        'start_date',
        'due_date',
        'allow_late_submission',
        'status'
    ];

    public function submissions()
    {
        return $this->hasMany(Submission::class);
    }
}