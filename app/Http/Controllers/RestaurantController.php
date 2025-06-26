<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{


    public function show($slug)
    {
        // Fetch the restaurant details by slug
        $restaurant = Restaurant::where('slug', $slug)->firstOrFail();

        // Pass the restaurant data to the view
        return view('frontend.resturant', compact('restaurant'));
    }
}
