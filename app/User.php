<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
      'password', 'remember_token',
    ];
    
    public function userDetail(){
      return $this->hasOne('App\UserDetail');
    }
    
    public function workload(){
      return $this->hasMany('App\Reservation');
    }
    
    public function reservations(){
      return $this->hasMany('App\Reservation', 'id', 'client_id');
    }
    
    public function enterprise(){
      return $this->hasOne('App\Enterprise');
    }
    
    public function creator(){
      return $this->belongsTo('App\User', 'created_by', 'id');
    }
    
    public function subordinates(){
      return $this->hasMany('App\User')
    }
}
