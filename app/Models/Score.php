<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    //
    protected $fillable = [
        'alias',
        'time',
        'game_id',
        'user_id',
    ];
}
