<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Models\Payments;

class Users extends Authenticatable
{

    protected $fillable = [
        'nombre',
        'username',
        'password',
        'email',
    ];

    public function payments()
    {
        return $this->hasMany(Payments::class);
    }

    public function suscription()
    {
        return $this->hasOne(Suscriptions::class);
    }

    public function resources()
    {
        return $this->hasMany(Resources::class);
    }

    public function forums()
    {
        return $this->hasMany(Forums::class);
    }
}
