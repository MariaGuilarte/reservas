<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class ServiceController extends Controller
{
    public function index(){
      $services = Service::all();
      return view('services.index', ["services"=>$services]);
    }

    public function create(){
      return view('services.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Service $service){
      return view('services.index', ["service"=>$service]);
    }

    public function edit(Service $service){
      return view('services.edit', ["service"=>$service]);
    }

    public function update(Request $request, Service $service)
    {

    }

    public function destroy(Service $service)
    {

    }
}
