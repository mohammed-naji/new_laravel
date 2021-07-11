<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index() {

        $posts = Post::all();

        return view('crud.index', compact('posts'));
    }

    public function create() {
        return view('crud.create');
    }

    public function store(Request $request) {
        
        $request->validate([
            'title' => 'required',
            'image' => 'required',
            'content' => 'required',
        ]);

        $request->file('image')->move(public_path('uploads'), $request->file('image')->getClientOriginalName());

        Post::create([
            'title' => $request->title,
            'image' => $request->file('image')->getClientOriginalName(),
            'content' => $request->content
        ]);

        return redirect()->route('posts.index');

    }
}
