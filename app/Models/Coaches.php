<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coaches extends Model
{
    //
    protected $fillable = [
        'name',
        'number_phone',
        'foto',
        'user_id',
        'program_id',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
