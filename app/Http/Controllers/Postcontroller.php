<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class Postcontroller extends Controller
{
    //
    public function index(Post $post){
       $posts=$post->take(10)->get();
    //    dd($posts);
        return view('post/index',[
            'posts'=>$posts,
        ]);
    }
}
