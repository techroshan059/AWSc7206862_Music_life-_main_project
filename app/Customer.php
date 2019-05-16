<?php

namespace App;


use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;



class Customer extends Authenticatable
{

    use Notifiable;
  
    protected $table= 'customers';
    protected $fillable = ['id','email',
        'first_name', 'last_name','password','avatar','last_login','ip_address','status','activation_token','pnumber'
        ];
    protected $hidden = [
        'password', 'remember_token', 'activation_token'
    ];


    


    public function getJWTIdentifier()
        {
            return $this->getKey();
        }
        public function getJWTCustomClaims()
        {
            return [];
        }







}
