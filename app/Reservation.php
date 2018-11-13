<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
  public function client(){
    return $this->belongsTo('App\User', 'client_id', 'id');
  }

  public function professional(){
    return $this->belongsTo('App\User', 'user_id', 'id');
  }

  // public function services(){
  //   return $this->belongsToMany('App\Service', 'reservations_services')->withPivot('reservation_id', 'service_id');
  // }
}
