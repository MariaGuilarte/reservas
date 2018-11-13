<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enterprise;

class EnterpriseController extends Controller
{
    public function index(){
      $enterprises = Enterprise::all();
      return view('enterprises.index', ["enterprises"=>$enterprises]);
    }

    public function create(){
      return view('enterprises.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Enterprise $enterprise){
      return view('enterprises.index', ["enterprise"=>$enterprise]);
    }

    public function edit(Enterprise $enterprise){
      return view('enterprises.edit', ["enterprise"=>$enterprise]);
    }

    public function update(Request $request, Enterprise $enterprise)
    {

    }

    public function destroy(Enterprise $enterprise)
    {

    }
}
