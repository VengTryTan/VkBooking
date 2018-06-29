<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;
class ReservationController extends Controller
{
    public function reserve(Request $request)
    { 
        $reservation = new Reservation();
        $reservation->code = $request->code;
        $reservation->guest_ID = $request->guest_ID;
        $reservation->room_ID = $request->room_ID;
        $reservation->save();

        return view('home');

        
    }
}
