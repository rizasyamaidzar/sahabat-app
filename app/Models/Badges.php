<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Badges extends Model
{
    //
    protected $fillable = [
        'level',
        'point',
        'foto',
    ];
}
