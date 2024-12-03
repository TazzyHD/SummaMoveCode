<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exercises_user extends Model
{
    protected $table = 'exercises_user';
    protected $fillable = ['user_id', 'exercise_id', 'reps'];
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function exercise()
    {
        return $this->belongsTo(Exercises::class);
    }
}
