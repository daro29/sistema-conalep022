<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    protected $fillable = [
        'title', 'excerpt', 'body', 'status', 'receiber',
    ];

}
