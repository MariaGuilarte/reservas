<?php

namespace App\Policies;

use App\User;
use App\Category;
use Illuminate\Auth\Access\HandlesAuthorization;

class CategoryPolicy
{
    use HandlesAuthorization;

    public function before($user, $ability){
      if( $user->role_id == 5 ){
        return true;
      }
    }

    public function list(User $user){

    }

    public function view(User $user, Category $category)
    {
        //
    }

    public function create(User $user)
    {
        //
    }

    public function update(User $user, Category $category)
    {
        //
    }

    public function delete(User $user, Category $category)
    {
        //
    }

    public function restore(User $user, Category $category)
    {
        //
    }

    public function forceDelete(User $user, Category $category)
    {
        //
    }
}
