<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        // Fetch all services from the database
        $services = Service::all();

        // Pass the data to the view
        return view('frontend.service', compact('services'));
    }}
