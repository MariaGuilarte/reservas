<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enterprise;

class EnterpriseController extends Controller
{
    public function index(){
      return view('enterprises.index');
    }

    public function create(){
      return view('enterprises.create');
    }
    
    public function store(Request $request)
    {
        //
    }

    public function show(Enterprise $enterprise){
      return view('enterprises.index');
    }

    public function edit(Enterprise $enterprise){
      return view('enterprises.edit');
    }
    
    public function update(Request $request, Enterprise $enterprise)
    {
      
    }

    public function destroy(Enterprise $enterprise)
    {
      
    }
}
