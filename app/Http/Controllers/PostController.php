<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
{
    // Get all posts from the database
    $posts = Post::all();

    // Send posts to the view
    return view('welcome', compact('posts'));
}
}
