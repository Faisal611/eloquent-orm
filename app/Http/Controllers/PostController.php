<?php
/**
 * Created by IntelliJ IDEA.
 * User: Sheikh
 * Date: 11/18/2020
 * Time: 6:29 PM
 */

namespace App\Http\Controllers;


use App\Post;
use App\User;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class PostController
{
//    new User create 1st way
    public function createUser(){
        $data =[
            'name'=>'shourov',
            'email'=>'shourov@gmail.com',
            'password'=>'123'
        ];

      User::create($data);

    }
//new post create 1st way
    public function createPost(){
        $data =[
            'title'=>'Big Dog',
            'user_id'=>3,
            'description'=>'This is a Dog he also good dog your heir is black ',
            'status'=>3
        ];
        Post::create($data);
    }

//new post create 2nd way

    public function addPost(){
        $post = new Post;
        $post->title = 'This is Title fa';
        $post->description = 'This is description';
        $post->user_id = 4;
        $post->status = 4;
        $post->save();

    }

//update data create
    public function updatePost(){
        $post = Post::find(1);
        $post->title = 'The title';
        $post->save();
    }

//parameter pass
    public function postId($id){
//      $allPost=Post::get();
        $allPost = Post::findOrFail( $id );
        dd($allPost);
//      return $allPost;
    }

//Data lifting
    public function allPost(){
//          $allPost=Post::get();
            $allPost = Post::where('title', 'Big Dog')->get();
            dd($allPost);
//           return $allPost;
    }
//Delete post option
    public function deletePost(){
//       $post = Post::findOrFail(2);
//        $post->delete();
        Post::destroy([16]);
    }






}
