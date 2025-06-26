<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{

    public function getImages()
    {
        // Fetch only the 'images' column from the gallery model
        $galleryImages = Gallery::select('images')->get();

        // Flatten the result if necessary (array of images)
        $images = $galleryImages->pluck('images')->flatten();

        // Base URL for images
        $baseUrl = asset('storage/');  // Assuming images are stored in the storage/gallery folder

        // Map images to include the full URL and alt text
        $formattedImages = array_map(function($image) use ($baseUrl) {
            return [
                'src' => $baseUrl . '/' . $image,  // Concatenate the base URL and image path
                'alt' => 'Gallery Image'  // Default alt text
            ];
        }, $images->toArray());

        return response()->json($formattedImages); // Return images with full URLs in JSON format
    }



}
