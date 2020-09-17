<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class Postcontroller extends Controller
{
    //
    public function index(Request $request){
        // $post=Post::findorfail($request->id);
        // $post->delete();
        // $post = Post::where('is_published',true)->get();

        // $post=Post::orderBy('created_at','desc')->get();

        // $post = Post::latest()->get();

        // bisa juga mengmbil data sesui kebutuhan bantuan method take

        // $post =Post::latest()->take(1)->get();

        // atau bisa menggunaka method limit untuk menggantikan method take

        $post = Post::latest()->limit(1)->get();

        dd($post);
    
    }
    
}
