<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChampadeviInfo extends Model
{
    use HasFactory;


    protected $fillable = [
        'title',
        'description',
        'feature_image',
        'carousel_images',
    ];

    protected $casts = [
        'carousel_images' => 'array',
    ];

}
