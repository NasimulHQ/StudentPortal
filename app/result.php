<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class result extends Model
{
    protected $fillable = ['subject', 'marks', 'gpa','student_id'];

    public function student()
    {
        return $this->belongsTo(student::class, 'student_id');
    }
}
