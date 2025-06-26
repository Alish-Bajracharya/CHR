<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'short_description',
        'long_description',
        'featured_image',
        'carousel_images',
        'icon',
        'image',
    ];

    protected $casts = [
        'carousel_images' => 'array', // Automatically decode JSON to array
    ];

}
