<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MajorAttraction extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'category',
        'short_description',
        'long_description',
        'location',
        'image',
        'images',
        'places', // Added places
    ];

    protected $casts = [
        'images' => 'array', // Cast JSON field to array
        'places' => 'array', // Cast places as an array
    ];
}
