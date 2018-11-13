<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProfessionalPolicy
{
    use HandlesAuthorization;

     public function before($user, $ability){
       if( $user->role_id == 3 ){
         return true;
       }
     }

     public function list(User $user){
       if( $user->role_id == 4 || $user->role_id == 5 ){
         return true;
       }
     }

     public function view(User $user, User $professional){
       if( $user->role_id == 5 ) {
         return true;
       }elseif ( ($user->role_id == 4 )  && ($professional->creator->created_by == $user->id) ){
         return true;
       }
     }

     public function create(User $user){

     }

     public function edit(User $user, User $model){

     }

     public function update(User $user, User $model){

     }

     public function delete(User $user, User $model){

     }

     public function restore(User $user, User $model){
         //
     }

     public function forceDelete(User $user, User $model){
         //
     }
}
