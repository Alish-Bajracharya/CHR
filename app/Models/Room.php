<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'description',
        'price',
        'capacity',
        'size',
        'amenities',
        'images',
        'featured_image',

    ];

    protected $casts = [
        'amenities' => 'array',
        'images' => 'array',
    ];
}

