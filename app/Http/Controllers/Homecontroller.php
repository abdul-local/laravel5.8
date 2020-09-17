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
    
    // $user = User::where('active',false)->get();
    // $user =User::Active()->get();
    $user = User::lebihdari(21)->get();
     dd($user);
   

  
}
}