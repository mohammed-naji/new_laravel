<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;


class SQLController extends Controller
{
    public function index() {


        /*  PURE SQL  */
        // DB::insert('insert into posts (title, image, content) value (:title, :image, :content)', [
        //     'title' => 'new post 2', 
        //     'image' => 'image.png', 
        //     'content' => 'text'
        // ]);

        // $post = DB::select('select * from posts');

        // return $post;

        // DB::delete('delete from posts where id = ?', [1]);
        // DB::delete('delete from posts');

        // DB::update('update posts set title = ? where id = ?', ['new post 3', 7]);

        /*  END PURE SQL  */



        /*  Query Builder  */
        // $posts = DB::table('posts')->where('id', 6)->toSql();
        // $posts = DB::table('posts')->where('id', 6)->get();
        // return $posts;

        // DB::table('posts')->insert([
        //     'title' => 'This is posts from Query',
        //     'image' => 'img.png',
        //     'content' => 'texttttt'
        // ]);

        // DB::table('posts')->where('id', 8)->update([
        //     'content' => 'text'
        // ]);

        // DB::table('posts')->where('id', 8)->delete();
        /* End Query Builder  */



        /* Elequent Model  */
        // $posts = Post::all();
        // Post::create([
        //     'title' => 'This is posts from Elequent',
        //     'image' => 'img.png',
        //     'content' => 'text'
        // ]);
        
        // $post = new Post();
        // $post->title = 'This post for Noooor';
        // $post->image = 'img.png';
        // $post->content = 'text';
        // $post->save();


        // Post::find(11)->delete();

        Post::find(10)->update(['content' => 'new new content']);

        // $post = Post::find(10);
        // $post->content = 'new Text';
        // $post->save();



        return 'done';
    
        //return view('sql')->with('posts', $posts);
    }
}
