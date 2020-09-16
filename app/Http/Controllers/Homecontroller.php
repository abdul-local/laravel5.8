<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\Newsletter\subscriptionform;
use App\Mail\userActivationMail;
use Illuminate\Support\Facades\Mail;
class Homecontroller extends Controller
{
// method
public function index(){
    
    Mail::to('abdullah.hamzan@gmail.com')->send(new userActivationMail());
    return 'email berhasil di kirim';
}
// buat method dengan nama other
public function other(){
    return 'Other direct nih broo';
}

public function subscribe(subscriptionform $request){
    

    // menggunaka cara lain
    return redirect()->route('other');
}

}