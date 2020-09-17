<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
        'name', 'code', 'asistances_id', 'periods_id',
    ];

    public function students()
    {
        return $this->belongsToMany(Student::class)->withTimestamps();
    }
}
