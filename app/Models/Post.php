<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'body']; // Allow mass assignment for these fields


    public function comments()
{
    return $this->hasMany(Comment::class);
}
}
