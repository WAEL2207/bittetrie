<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Administrateur extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'nom','email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}

