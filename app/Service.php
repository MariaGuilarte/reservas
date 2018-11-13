<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
  protected $fillable = ["name", "description", "created_by"];

  public function scopeCanview($query){
    $user_role = \Auth::user()->role_id;

    if( $user_role == 4){
      $subs = \Auth::user()->subsIdsArray();
      return $query->whereIn('created_by', $subs);
    }else {
      return $query;
    }

  }

}
