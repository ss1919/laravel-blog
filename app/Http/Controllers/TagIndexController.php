<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagIndexController extends Controller
{
    public function index($slug)
    {
        $tag = Tag::where('slug', $slug)->firstOrFail();
        $posts = $tag->posts()->orderBy('id', 'desc')->paginate(4);

        return view('tags.index', compact('tag', 'posts'));
    }
}
