<?php

namespace App\Policies;

use App\User;
use App\Enterprise;
use Illuminate\Auth\Access\HandlesAuthorization;

class EnterprisePolicy
{
    use HandlesAuthorization;

    public function before($user, $ability){
      if( $user->role_id == 5 ){
        return true;
      }
    }

    public function list(User $user){

    }

    public function view(User $user, Enterprise $enterprise)
    {
        //
    }

    public function create(User $user)
    {
        //
    }

    public function update(User $user, Enterprise $enterprise)
    {
        //
    }

    public function delete(User $user, Enterprise $enterprise)
    {
        //
    }

    public function restore(User $user, Enterprise $enterprise)
    {
        //
    }

    public function forceDelete(User $user, Enterprise $enterprise)
    {
        //
    }
}
