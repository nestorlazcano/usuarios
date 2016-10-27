<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'id_rol', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function admin(){
        return $this->id_rol === 1;
       
    }
    
    public function normal(){
        return $this->id_rol === 2;
       
    }
    
    public function consul(){
        return $this->id_rol === 3;
       
    }
}
