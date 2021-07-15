<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
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

    public function store(PostRequest $request) {

        // $request->validate([
        //     'title' => 'required',
        //     'image' => 'required',
        //     'content' => 'required',
        // ]);

        // $imgname = $request->file('image')->getClientOriginalName();
        $ex = $request->file('image')->getClientOriginalExtension();
        $new_img_name = rand() . '_' . rand() . '_' . rand() . '.'.$ex;
        $request->file('image')->move(public_path('uploads'), $new_img_name);

        Post::create([
            'title' => $request->title,
            'image' => $new_img_name,
            'content' => $request->content
        ]);

        return redirect()->route('posts.index');

    }

    public function destroy($id) {
        Post::find($id)->delete();
        return redirect()->route('posts.index');
    }

    public function update($id) {
        $post = Post::findOrFail($id);
        // $post = Post::find($id);
        // if(!$post) {
        //     abort(404);
        // }

        return view('crud.update', compact('post'));
    }

    public function save(PostRequest $request, $id) {
        $post = Post::findOrFail($id);

        $new_img_name = $post->image;
        if($request->has('image')) {
            $ex = $request->file('image')->getClientOriginalExtension();
            $new_img_name = rand() . '_' . rand() . '_' . rand() . '.'.$ex;
            $request->file('image')->move(public_path('uploads'), $new_img_name);
        }

        $post->update([
            'title' => $request->title,
            'image' => $new_img_name,
            'content' => $request->content
        ]);

        return redirect()->route('posts.index');
    }
}
