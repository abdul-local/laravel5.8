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
// buat method dengan nama other
public function other(){
    return 'Other direct nih broo';
}

public function subscribe(subscriptionform $request){
    

    // dd('Berhasil langgana ');
    // langsung redirest

    // return redirect('lain');
    // menggunaka cara lain
    return redirect()->route('other');
}

}