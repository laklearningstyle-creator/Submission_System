<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Submission;

class Grade extends Model
{
    protected $fillable = [
        'submission_id',
        'marks_obtained',
        'grade',
        'graded_by'
    ];

    public function submission()
    {
        return $this->belongsTo(Submission::class);
    }
}