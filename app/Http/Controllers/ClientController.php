<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ClientController extends Controller
{
    public function index(){
      $clients = User::clients()->get();
      return view('users.index', ["users"=>$clients]);
    }

    public function create(){
      return view('users.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show(User $client){
      return view('users.single', ["user"=>$client]);
    }

    public function edit(User $client){
      return view('users.edit');
    }

    public function update(Request $request, User $client)
    {

    }

    public function destroy(User $client)
    {

    }
}
