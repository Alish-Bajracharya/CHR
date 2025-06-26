<?php
namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class BlogController extends Controller
{

   public function blog()
{
    $blogs = Post::select('id', 'title', 'short_description', 'image', 'published_at')
                 ->orderBy('published_at', 'desc')
                 ->simplePaginate(6);

    return view('frontend.blog', compact('blogs'));
}



public function show($id)
{
    // Fetch the blog post by its ID
    $blog = Post::findOrFail($id);

    // Pass the blog to the view
    return view('frontend.blogpage', compact('blog'));
}

}

