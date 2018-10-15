<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TagsControlle extends Controller
{
    public function index(Tag $tag)
    {
        $posts = $tag->posts;

        return view('posts_index', compact('posts'));
    }
}
