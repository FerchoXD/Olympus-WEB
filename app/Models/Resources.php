<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resources extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'name',
        'extension',
        'category',
        'type',
        'URL'
    ];

    public function user()
    {
        return $this->belongsTo(Users::class);
    }
}
