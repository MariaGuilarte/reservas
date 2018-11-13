<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
  protected $fillable = ["client_id", "user_id", "reservation_date"];

  public function client(){
    return $this->belongsTo('App\User', 'client_id', 'id');
  }

  public function professional(){
    return $this->belongsTo('App\User', 'user_id', 'id');
  }

  // public function services(){
  //   return $this->belongsToMany('App\Service', 'reservations_services')->withPivot('reservation_id', 'service_id');
  // }

  public function scopeCanView($query){
    $user_role = \Auth::user()->role_id;

    if( $user_role == 4){
      $subs = \Auth::user()->subsIdsArray();
      return $query
                ->join('users as client', 'reservations.client_id', '=', 'client.id')
                ->join('users as professional', 'reservations.user_id'  , '=', 'professional.id')
                ->whereIn('client.created_by', $subs)
                ->orWhereIn('professional.created_by', $subs)
                ->select('reservations.*');
    }else {
      return $query;
    }
  }

}
