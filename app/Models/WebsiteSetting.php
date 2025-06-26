<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebsiteSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'email',
        'phone',
        'reservation_email',
        'location',
        'website_logo',
        'resort_name',
        'resort_logo',
        'facebook',
        'instagram',
        'twitter',
        'tripadvisor',
        'pinterest',
    ];
}
