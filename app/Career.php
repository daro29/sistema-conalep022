<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    protected $primarykey = "idcarrera";

    protected $fillable = [
        'name', 'description'
    ];

    public function students()
    {
        return $this->hasMany(Student::class);
    }
}
