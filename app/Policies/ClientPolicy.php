<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ClientPolicy
{
    use HandlesAuthorization;

    public function before($user, $ability){
      if( $user->role_id == 5 ){
        return true;
      }
    }

    public function list(User $user){
      if( $user->role_id == 3 || $user->role_id == 4 ){
        return true;
      }
    }

    public function view(User $user, User $model)
    {
      if( ($user->role_id == 3) && ($model->created_by == $user->id) ) {
        return true;
      }elseif ( $model->creator && ($user->role_id == 4 )  && ($model->creator->created_by == $user->id) ){
        return true;
      }
    }

    public function create(User $user)
    {
      if( $user->role_id == 3 ){
        return true;
      }
    }

    public function edit(User $user, User $model)
    {
      if ( ($user->role_id == 3) && ($model->created_by == $user->id) ) {
        return true;
      }
    }

    public function update(User $user, User $model)
    {
      if ( ($user->role_id == 3) && ($model->created_by == $user->id) ) {
        return true;
      }
    }

    public function delete(User $user, User $model)
    {
      if ( ($user->role_id == 3) && ($model->created_by == $user->id) ) {
        return true;
      }
    }

    public function restore(User $user, User $model)
    {
        //
    }

    public function forceDelete(User $user, User $model)
    {
        //
    }
}
