<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
 // buat method untuk index
 public function index(){
     return '<form action="'.route('home').'" method="post">
     <input type="text" name="email">
     <button type="submit" >button </button> 
     </form>';
 }
 // buat method untuk store utnuk ngamibl data dari methd index
 public function store(Request $request){
     //
     echo $request->email;

 }

    
}
