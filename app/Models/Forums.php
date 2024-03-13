<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forums extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'name',
        'topic',
        'category',
    ];

    public function user()
    {
        return $this->belongsTo(Users::class);
    }

    public function category()
    {
        return $this->hasOne(Categories::class);
    }

    public function Answers()
    {
        return $this->hasMany(Answers::class);
    }
}
