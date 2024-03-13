<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suscriptions extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'plan',
        'start',
        'end',
    ];

    public function user()
    {
        return $this->belongsTo(Users::class);
    }
}
