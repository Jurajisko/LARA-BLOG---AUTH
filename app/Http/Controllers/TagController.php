<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;


class TagController extends Controller
{
    public function show($id)
    {
        $tag = Tag::findOrFail($id);
        return view('posts.index')
            ->with('title', $tag->tags )
            ->with('posts', $tag->posts );
    }
}
