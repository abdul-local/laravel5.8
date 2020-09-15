<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
// method
public function index(){
    //return nilainya
    return view('home');
}

public function subscribe(Request $request){
    $this->validate($request,[
        'email'=>'required|email',
    ]);
    // ],[
    //     'email.required'=>':attribute harus di isi',
    //     'email.email'=>'kami membutuhkan email yang Valid',
    // ]);
    dd($request->email);
}

    
}
