<?php

namespace App\Http\Controllers;

use App\Models\MajorAttraction;
use Illuminate\Http\Request;

class MajorAttractionController extends Controller
{

    public function index()
    {
        // Fetch all major attractions from the database
        $majorAttractions = MajorAttraction::where('category', 'major_attraction')->get();

        // Pass the data to the view
        return view('frontend.majorattraction', compact('majorAttractions'));
    }
    
    
    public function local(){
        
        // Fetch all major attractions from the database
        $localattractions = MajorAttraction::where('category', 'local_interaction')->get();

        // Pass the data to the view
        return view('frontend.localattraction', compact('localattractions'));
    }
}
