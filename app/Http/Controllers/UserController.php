<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index(){
      return view('users.index');
    }

    public function create(){
      return view('users.create');
    }
    
    public function store(Request $request)
    {
        //
    }

    public function show(User $user){
      return view('users.index');
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
