<?php

namespace App\Policies;

use App\User;
use App\Reservation;
use Illuminate\Auth\Access\HandlesAuthorization;

class ReservationPolicy
{
    use HandlesAuthorization;

    public function before($user, $ability){
      if( $user->role_id == 3 ){
        return true;
      }
    }

    public function list(User $user){
      return true;
    }

    public function view(User $user, Reservation $reservation)
    {
      if( $user->role_id == 5 ){
        return true;
      }
    }

    public function create(User $user)
    {
        if( $user->role_id == 1 ){
          return true;
        }
    }

    public function update(User $user, Reservation $reservation)
    {
        //
    }

    public function delete(User $user, Reservation $reservation)
    {
        //
    }

    public function restore(User $user, Reservation $reservation)
    {
        //
    }

    public function forceDelete(User $user, Reservation $reservation)
    {
        //
    }
}
