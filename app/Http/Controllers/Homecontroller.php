<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Newsletter\subscriptionform;
use App\Mail\UserVerification;
use Illuminate\Support\Facades\Mail;
class Homecontroller extends Controller
{
// method
public function index(){
    
    Mail::to('abdullah.hamzan@gmail.com')->send(new UserVerification());
    return 'email berhasil di kirim';
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