<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class ServiceController extends Controller
{
    public function index(){
      return view('services.index');
    }

    public function create(){
      return view('services.create');
    }
    
    public function store(Request $request)
    {
        //
    }

    public function show(Service $service){
      return view('services.index');
    }

    public function edit(Service $service){
      return view('services.edit');
    }
    
    public function update(Request $request, Service $service)
    {
      
    }

    public function destroy(Service $service)
    {
      
    }
}
