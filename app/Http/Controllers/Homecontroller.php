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
public function index(Request $request){
    $user =User::latest()->paginate($request->get('per-page',2));
    return view('user/index',[
        'users'=>$user,
    ]);
    
  }


public function show(User $users){
    dd($users);
}
}