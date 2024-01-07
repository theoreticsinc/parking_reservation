<?php
// app/Http/Controllers/PostController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PostController extends Controller
{
    public function store(Request $request)
    {
        $title = $request->input('title');
        $content = $request->input('amount');

        // Process the data, e.g., save to the database
        echo $title;
        return redirect()->route('frontend.post.index'); // Redirect to a different page after processing
    }
    public function showPosts(Request $request) {

    }
    
}
