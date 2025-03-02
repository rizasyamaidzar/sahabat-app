<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Players extends Model
{
    //
    protected $fillable = [
        'name',
        'school',
        'number_phone',
        'instagram',
        'gender',
        'place_of_birth',
        'date_of_birth',
        'foto',
        'user_id',
        'program_id',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
