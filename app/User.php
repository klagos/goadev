<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function isAdmin()
    {
        return $this->email === 'goa@admin.cl';
    }
<<<<<<< HEAD
    public function torneos()
    {
        return $this->belongsToMany(Torneo::class);
=======

    public function verifyUser()
    {
        return $this->hasOne('App\VerifyUser');
>>>>>>> bb349320b20732ff0d8bb0607d5aba3366268096
    }
}
