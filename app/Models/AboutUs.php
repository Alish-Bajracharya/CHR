<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    use HasFactory;

    protected $fillable = [
        'short_description',
        'long_description',
        'feature_image',
        'main_image',
        'carousel_images',
    ];

    protected $casts = [
        'carousel_images' => 'array',
    ];
}
