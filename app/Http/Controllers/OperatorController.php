<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class OperatorController extends Controller
{
    public function index(){
      $users = User::operators()->get();
      return view('users.index', ['users'=>$users]);
    }

    public function create(){
      return view('users.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show(User $user){
      return view('users.single', ["user"=>$user]);
    }

    public function edit(User $user){
      return view('users.edit');
    }

    public function update(Request $request, User $user)
    {

    }

    public function destroy(User $user)
    {

    }
}
