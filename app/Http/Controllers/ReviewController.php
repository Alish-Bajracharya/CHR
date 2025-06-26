<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{

    public function review(){
        $reviews = Review::all();

        return view('frontend.review',compact('reviews'));
    }
}
