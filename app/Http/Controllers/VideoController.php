<?php

namespace App\Http\Controllers;

use App\Models\VideoGallery;
use Illuminate\Http\Request;

class VideoController extends Controller
{

    public function showVideoGallery()
    {
        // Fetch all the video URLs from the VideoGallery model
        $videos = VideoGallery::all();

        // Pass the videos data to the view
        return view('frontend.videogallery', compact('videos'));
    }

}
