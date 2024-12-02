<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class user_oefeningen extends Model
{
    protected $table = 'user_oefeningen';
    protected $fillable = ['user_id', 'oefening_id', 'reps'];
    public $timestamps = false;
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function oefening()
    {
        return $this->belongsTo(Oefening::class);
    }
}
