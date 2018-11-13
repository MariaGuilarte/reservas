<?php

namespace App\Policies;

use App\User;
use App\Reservation;
use Illuminate\Auth\Access\HandlesAuthorization;

class ReservationPolicy
{
    use HandlesAuthorization;

    public function before($user, $ability){
      // Operators have all privileges
      if( $user->role_id == 3 ){
        return true;
      }
    }

    public function list(User $user){
      return true;
    }

    public function view(User $user, Reservation $reservation){
      // Admins can view
      if( $user->role_id == 5 ){
        return true;
      // Directors can view if client or professional is second children
      }elseif( $user->role_id == 4 ){
        if( $reservation->client->creator->created_by == $user->id || $reservation->professional->creator->created_by == $user->id ){
          return true;
        }
      }
    }

    public function create(User $user){
        // Clients can create
        if( $user->role_id == 1 ){
          return true;
        }
    }

    public function edit(User $user){

    }

    public function update(User $user, Reservation $reservation){

    }

    public function delete(User $user, Reservation $reservation){

    }

    public function restore(User $user, Reservation $reservation){

    }

    public function forceDelete(User $user, Reservation $reservation){

    }
}
