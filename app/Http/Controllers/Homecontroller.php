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
    $user =User::orderBy('username',$request->get('order','asc'))->paginate($request->get('per-page',2));
    dd(request()->only('per-page','order'));
    return view('user/index',[
        'users'=>$user,
    ]);
    
  }


public function show(User $users){
    dd($users);
}
}