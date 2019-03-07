<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Torneo extends Model
{
    protected $fillable = [
        'name', 'capacity',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
