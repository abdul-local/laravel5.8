<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
// method
public function index(){
    //return nilainya
    return view('todo');
}

public function store(Request $request){
    dd($request->todo);
}

    
}
