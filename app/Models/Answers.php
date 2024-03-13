<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answers extends Model
{
    use HasFactory;
    protected $fillable = [
        'forum_id',
        'content',
    ];

    public function Forum()
    {
        return $this->belongsTo(Forums::class);
    }
}
