<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfessionalController extends Controller
{
    public function index(){
      $professionals = User::professionals()->get();
      return view('users.index', ["users"=>$professionals]);
    }

    public function create(){
      return view('professionals.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show(User $professional){
      return view('users.single', ["user"=>$professional]);
    }

    public function edit(User $professional){
      return view('users.edit');
    }

    public function update(Request $request, User $professional)
    {

    }

    public function destroy(User $professional)
    {

    }
}
