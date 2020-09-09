<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// menggunakan paramter
Route::get('/user/{id}/artikel/{idartikel}',function ($id,$idartikel){
    return 'user' .$id .'artikel' .$idartikel ;
});

//menggunakan Route Group
Route::prefix('account')->group(function(){
    
    // buat routing Group lagi
    Route::prefix('setting')->group(function(){

    
    Route::get('/change-password', function () {
        return 'change-password';
    });
    Route::get('/profile', function () {
        return 'profile';
    });
    Route::get('/artikel', function () {
        return 'artikel';
    });
});

    // buat Routing lagi
    Route::get('/folower',function(){
        return 'Folower';

    });
});

