<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{


    public function show()
    {
        // Fetch the first 'About Us' record
        $aboutUs = AboutUs::first();

        // Return the view with the data
        return view('frontend.about', compact('aboutUs'));
    }
}
