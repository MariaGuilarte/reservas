<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password', 'role_id'
    ];

    protected $hidden = [
      'password', 'remember_token',
    ];

    public function role(){
      return $this->belongsTo('App\Role');
    }

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

    // public function subordinates(){
    //   return $this->hasMany('App\User');
    // }

    public function scopeOperators($query){
      $user_role = \Auth::user()->role_id;

      switch( $user_role ){
        case 5:
          return $query->where('role_id', 3);
          break;
        case 4:
          return $query->where([ ['role_id', 3], ['created_by', \Auth::id()] ]);
          break;
      }
    }

    public function scopeClients($query){
      $user_role = \Auth::user()->role_id;

      switch( $user_role ){
        case 5:
          return $query->where('role_id', 1);
          break;
        case 4:
          $subs = $this->subsIdsArray();
          return $query->where('role_id', 1)->whereIn('created_by', $subs);
          break;
        case 3:
          return User::subordinates()->where('role_id', 1);
          break;
      }
    }

    public function scopeProfessionals($query){
      $user_role = \Auth::user()->role_id;

      switch( $user_role ){
        case 5:
          return $query->where('role_id', 2);
          break;
        case 4:
          $subs = $this->subsIdsArray();
          return $query->where('role_id', 2)->whereIn('created_by', $subs);
          break;
        case 3:
          return User::subordinates()->where('role_id', 2);
          break;
      }
    }

    public function scopeSubordinates( $query ){
      return $query->where('created_by', \Auth::id());
    }

    public function subsIdsArray(){
      $subs = User::subordinates()->get();
      $subs = $subs->map(function($u){
        return $u->id;
      });
      $subs = $subs->toArray();
      return $subs;
    }
}
