<?php

namespace App\Http\Controllers;

use App\Models\ChampadeviInfo;
use Illuminate\Http\Request;

class ChampadeviInfoController extends Controller
{
    public function index()
    {
        $champadeviInfo = ChampadeviInfo::first();


        return view('frontend.champadeviinfo', compact('champadeviInfo'));
    }

}
