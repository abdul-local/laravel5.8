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

Route::get('/','Postcontroller@index');
// Route::get('/','Homecontroller@index');
// // membuat Route baru
// Route::get('/lain','Homecontroller@other')->name('other');

// Route::post('/todo','Homecontroller@subscribe')->name('subscribe');

// Route::get('/seed',function(\App\Post $post){
//     $faker=Faker\Factory::create();
//     foreach (range(1,100) as $x){
//         $post->create([
//             'title'=>$faker->sentence(5),
//             'content'=>$faker->sentence(30),
//         ]);
//     }

// });


