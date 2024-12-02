<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oefening extends Model
{
    use HasFactory;

    protected $table = "oefeningen";

    public $timestamps = false;

    protected $fillable = [
        'titel',
        'instructie',
        'engelse_instructie',
    ];
}
