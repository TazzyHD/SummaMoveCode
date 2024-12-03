<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    protected $table = 'exercises';

    public $timestamps = false;

    protected $fillable = [
        'title',
        'instruction',
    ];
}
