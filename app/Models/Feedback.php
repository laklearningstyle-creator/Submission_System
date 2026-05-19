<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Submission;

class Feedback extends Model
{
    protected $fillable = [
        'submission_id',
        'teacher_id',
        'comment'
    ];

    public function submission()
    {
        return $this->belongsTo(Submission::class);
    }
}