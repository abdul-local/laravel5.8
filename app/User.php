<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token','email',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //buat method
    public function getFullname(){
        return $this->first_name . ' ' .$this->last_name;
    }
    // buat method usernameorname
    public function usernameorname(){
        if(!$this->username){
            // return $this->table->first_name;
        }
        return $this->username;
    }
    // membuat scope untuk mempermudah di control
    public function scopeActive($query){
        return $query->where('active',true);
    }

    // membuat scope untuk mengambil data umur lebih 21
    public function scopeLebihdari($query,$age){
        return $query->where('age','>=',$age);
    }
    // public function getRouteKeyname(){
    //     return 'username';
    // }

}
