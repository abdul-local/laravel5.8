<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class Postcontroller extends Controller
{
    //
    public function index(){
        // Post::create([
        //     'title'=>'judul 1',
        //     'content'=>'Content 1'
        // ]);
        $posts = new Post;
        $posts->title='judul 2';
        $posts->content='Kontent 2';
        $posts->save();

    
    }
    
}
