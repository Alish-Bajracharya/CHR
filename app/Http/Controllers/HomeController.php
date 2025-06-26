<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function slider(){
        // Fetch all carousel items
        $slider = Carousel::all();
        return view('frontend.index', compact('slider'));
    }


}
