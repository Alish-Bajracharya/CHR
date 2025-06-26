<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;


    public function gallery(){
        return view('frontend.photogallery');
    }

    public function blog(){
        return view('frontend.blog');

    }

    public function videogallery(){
        return view('frontend.videogallery');

    }


    public function bishnudevi(){
        return view('frontend.bishnudevihall');
    }


    public function bagh(){
        return view('frontend.baghbhairab');
    }



    public function local(){
        return view('frontend.localattraction');
    }


    public function contact(){
        return view('frontend.contact');
    }
}
