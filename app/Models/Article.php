<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function tag()
    {
        return $this->belongsTo(Tag::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class)->latest();
    }
}
