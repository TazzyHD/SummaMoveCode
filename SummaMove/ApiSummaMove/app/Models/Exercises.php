<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exercises extends Model
{
    protected $table = 'exercises';

    public $timestamps = false;

    protected $fillable = [
        'title',
        'instruction',
    ];


    public function users()
    {
        return $this->belongsToMany(User::class, 'Exercises_user')
            ->withPivot('reps');
    }
}
