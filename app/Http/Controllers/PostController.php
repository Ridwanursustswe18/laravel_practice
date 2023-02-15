<?php

namespace App\Http\Controllers;
 use App\Models\Comment;
use App\Models\Post;
use App\Models\user_tbl;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show(){

        // $user = user_tbl::find($id);
        // return $user->posts;
//         $users = user_tbl::where('name', "Ridwanur Rahman")->get();
 
// $posts = Post::whereBelongsTo($users)->get();
// return $posts;
       $posts = user_tbl::with('posts.comments')->get(); 
    return $posts;    

}
}