<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Newsletter\subscriptionform;

class Homecontroller extends Controller
{
// method
public function index(){
    //return nilainya
    return view('home');
}

public function subscribe(subscriptionform $request){
    

    dd('Berhasil langgana ');
}

}