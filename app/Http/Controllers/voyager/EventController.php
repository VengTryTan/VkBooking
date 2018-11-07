<?php

namespace App\Http\Controllers\voyager;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Hotel;
use App\Rate;
use Calendar;
use Validator;
use PDO;


class EventController extends Controller
{
    public function index()
    {
        $hotels = Hotel::all();
        $rates = Rate::all();

        return view('vendor.voyager.pricings.browse', compact(['hotels', 'rates']));

    }
 

    public function addEvent(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'hotels_id' => 'required',
            'price' => 'required',
            'start' => 'required',
            'end' => 'required'
        ]);
 
        if ($validator->fails()) {
            \Session::flash('warnning','Please enter the valid details');
            return redirect()->route('events.index');
        }
 
        $event = new Rate();
        $event->hotels_id = $request->hotels_id;
        $event->price = $request->price;
        $event->start = $request->start;
        $event->end = $request->end;
        $event->save();

 
        // \Session::flash('success','Event added successfully.');
        return redirect()->route('events.index');
    }
}
