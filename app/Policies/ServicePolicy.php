<?php

namespace App\Policies;

use App\User;
use App\Service;
use Illuminate\Auth\Access\HandlesAuthorization;

class ServicePolicy
{
    use HandlesAuthorization;


    public function before($user, $ability){
      if( $user->role_id == 3 ){
        return true;
      }
    }

    public function list(User $user){
      if( $user->role_id == 3 || $user->role_id == 4 ){
        return true;
      }
    }

    public function view(User $user, Service $service){
      // Admins can view
      if( $user->role_id == 5 ){
        return true;
      // Directors can view if creator of service is a child
      }elseif( $user->role_id == 4 ){
        if( $service->creator->created_by == $user->id ){
          return true;
        }
      }
    }

    public function create(User $user){

    }

    public function store(User $user){

    }

    public function update(User $user, Service $service){

    }

    public function delete(User $user, Service $service){

    }

    public function restore(User $user, Service $service){

    }

    public function forceDelete(User $user, Service $service){

    }
}
