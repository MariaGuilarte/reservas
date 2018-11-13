<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class OperatorPolicy
{
    use HandlesAuthorization;

    public function before($user, $ability){
      if( $user->role_id == 5 ){
        return true;
      }
    }

    public function list(User $user){
      if( ( $user->role_id == 4 ) ){
        return true;
      }
    }

    public function view(User $user, User $model){
      if( $user->id == $model->created_by ){
        return true;
      }
    }

    public function create(User $user)
    {
      if( ( $user->role_id == 4 ) ){
        return true;
      }
    }

    public function edit(User $user, User $model){
      if( $user->id == $model->created_by ){
        return true;
      }
    }
    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\User  $model
     * @return mixed
     */
    public function update(User $user, User $model)
    {
      if( $user->id == $model->created_by ){
        return true;
      }
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\User  $model
     * @return mixed
     */
    public function delete(User $user, User $model)
    {
      if( $user->id == $model->created_by ){
        return true;
      }
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\User  $model
     * @return mixed
     */
    public function restore(User $user, User $model)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\User  $model
     * @return mixed
     */
    public function forceDelete(User $user, User $model)
    {
        //
    }
}
