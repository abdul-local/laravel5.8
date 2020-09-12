<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
     // buat method
     public function index(request $request){
    //    echo $_GET['name'];
        // dd($request->name);

        // echo $request->name;
        // gunakan method get
        echo $request->get('name','kosong');
    }
}
