<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  public function enterprises(){
    return $this->hasMany('App\Enterprises');
  }
}
