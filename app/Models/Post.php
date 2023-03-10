<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function tags()
    {
        return $this->belongsToMany(Tag::class,'relation_ship')->withTimestamps();
    }

    public function likes()
    {
        return $this->hasMany(like::class);
    }
}
