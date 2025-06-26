<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;


    protected $fillable = [
        'title',
        'short_description',
        'content',
        'image',
        'published_at',
    ];

    protected $casts = [
        'published_at' => 'date', // Cast published_at to a date
    ];
}
