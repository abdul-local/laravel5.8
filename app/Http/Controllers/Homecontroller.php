<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
// method
public function index($username){
    // return view('user.index')->with('name',$username);
    // return view('user.index')->with([
    //     'name'=>$username,
    //     'fullname'=>'Abdulloh hamzan',
    // ]);
    //menggunakan concapact
    // // dd(compact('username'));
    // return view('user.index'.compact('username'));

    // cara yang paling baik
    return view('user.index',[
        'username'=>$username,
        'fullname'=>'abdull hamzan',
    ]);
}
    
}
