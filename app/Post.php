<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    
    protected $fillable =[
        'title',
        'content',
    ];

    // inisiasi untuk mendaptarkan variabel published_at biar bisa terkoneksi karbon
    protected $dates =[
        'published_at'
    ];

}

