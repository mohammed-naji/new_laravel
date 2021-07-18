<?php

namespace App\Http\Controllers\API;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index() {

        if(request()->api_key == 123456){
            $posts = Post::all();
            if(count($posts) > 0) {
                return response()->json([
                    'data' => $posts,
                    'message' => 'There is some posts',
                    'status' => 1,
                    'date' => now()
                ]);
            }else {
                return response()->json([
                    'message' => 'There is no data found',
                    'status' => 0
                ]);
            }
        }else  {
            return response()->json([
                'message' => 'You are not authorized to see this data',
                'status' => 0
            ]);
        }

    }

    public function store(Request $request) {
        $post = Post::create($request->all());
        return $post;
    }

    public function update(Request $request, $id) {
        $post = Post::find($id)->update($request->all());
        return $post;
    }

    public function delete($id) {
        $post = Post::find($id)->delete();
        return $post;
    }

    public function search(Request $request) {

        // return $request->all();
        $posts = Post::where('title', 'like', '%'.$request->search.'%')
        ->orWhere('content', 'like', '%'.$request->search.'%')
        ->get();

        if(count($posts) > 0) {
            return $posts;
        }else {
            return response()->json(['message' => 'There is no data found']);
        }
    }

}
