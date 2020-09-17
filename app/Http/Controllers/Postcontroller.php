<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class Postcontroller extends Controller
{
    //
    public function index(Request $request){
        $posts = Post::find($request->id);
        // menggunakan method diffForHumans()
        // dd($posts->created_at->diffForHumans());
        // dd($posts->published_at);
        
        return view('post/show',[
            'posts'=>$posts,
        ]);
    
    }
    
}
