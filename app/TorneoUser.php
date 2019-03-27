<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TorneoUser extends Model
{
    protected $fillable = [
        'user_id', 'torneo_id',
    ];
    protected $table = 'torneo_user';
}
