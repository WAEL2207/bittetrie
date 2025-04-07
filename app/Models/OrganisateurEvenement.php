<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class OrganisateurEvenement extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'nom','email', 'password', 'evenements',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
