<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    protected $fillable = [
        'forum_id',
        'name',
        'description',
    ];

    public function Forum()
    {
        return $this->belongsTo(Forums::class);
    }
}
