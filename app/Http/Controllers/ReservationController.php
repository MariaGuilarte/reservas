<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;

class ReservationController extends Controller
{
    public function index(){
      return view('reservations.index');
    }

    public function create(){
      return view('reservations.create');
    }
    
    public function store(Request $request)
    {
        //
    }

    public function show(Reservation $reservation){
      return view('reservations.index');
    }

    public function edit(Reservation $reservation){
      return view('reservations.edit');
    }
    
    public function update(Request $request, Reservation $reservation)
    {
      
    }

    public function destroy(Reservation $reservation)
    {
      
    }
}
