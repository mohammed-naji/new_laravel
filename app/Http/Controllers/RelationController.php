<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Comment;
use App\Models\Identity;
use App\Models\Mobile;
use App\Models\Person;
use App\Models\Post;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RelationController extends Controller
{
    public function index() {



        // $person = Person::join('identities', 'people.id', 'identities.people_id')->get();

        // $person = Person::find(1);

        // dump($person->id_code);

        // $id = Identity::find(1);

        // dump($id->person);

        // $user = User::find(1);

        // dump($user->mobile);

        // $mobile = Mobile::find(1);

        // dump($mobile->user->name);

        // $post = Post::find(3);

        // // return $post->comments()->count();
        // return $post->comments;

        // $comment = Comment::find(1);
        // return $comment->post;

        // Mobile::create([
        //     'number' => '123',
        //     'code' => '059',
        //     'user_id' => 2
        // ]);

        // $user = User::find(3);

        // $user->mobile()->create([
        //     'number' => '123',
        //     'code' => '059',
        // ]);

        // $user = User::find(2);
        // $user->roles()->attach([1]); // to add new role to the pivot table
        // $user->roles()->detach([1]); // to remove role from the pivot table
        // $user->roles()->sync([1, 2]); // to remove role from the pivot table

        // return $user->roles;

        // $role = Role::find(2);
        // return $role->users;

        // $post = Post::find(3);
        // $post->image()->create([
        //     'url' => 'fdsfasdf',
        //     'title' => 'fdsaf',
        //     'alt' => 'Mohammed'
        // ]);
        // return $post;

        $user = User::find(3);
        // $user->image()->create([
        //     'url' => 'fdsfasdf',
        //     'title' => 'fdsaf',
        //     'alt' => 'Mohammed'
        // ]);
        return $user->image;

    }
}
