<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class Postcontroller extends Controller
{
    //
    public function index(Request $request){
        $post=Post::find($request->id);
        $post->update([
            'title'=>'Post satu',
            'content'=>'Kontent satu',
        ]);
    
    
    }
    
}
