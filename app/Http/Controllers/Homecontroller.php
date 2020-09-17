<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\Newsletter\subscriptionform;
use App\Mail\userActivationMail;
use Illuminate\Support\Facades\Mail;
use App\User;
class Homecontroller extends Controller

{
// method
public function index(){
    
    $user = User::where('username','abdul')->first();
    // dd($user);
    // return $user->username;

    // mengakses full name
    return $user->usernameorname();

  
}
}