<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class Postcontroller extends Controller
{
    //
    public function index(Request $request){
        $post=Post::findorfail($request->id);
        $post->delete();
    
    }
    
}
