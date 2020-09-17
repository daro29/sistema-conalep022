<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Qualification extends Model
{
    protected $fillable = [
        'qualification', 'student_id', 'subject_id',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
