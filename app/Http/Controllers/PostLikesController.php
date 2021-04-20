<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostLikesController extends Controller
{
    public function store(Post $post)
    {
        $post->like(auth()->user());
        return redirect()->back();
    }
}
