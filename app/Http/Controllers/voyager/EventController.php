<?php

namespace App\Http\Controllers\voyager;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Hotel;
use App\Pricing;
use Calendar;
use Validator;
use PDO;


class EventController extends Controller
{
    public function index()
    {
        $hotels = Hotel::all();
        $events = Pricing::get();
        $event_list = [];
        
        foreach ($events as $key => $event) {
            $event_list[] = Calendar::event(
                $event->event_name,
                true,
                new \DateTime($event->start_date),
                new \DateTime($event->end_date.' +1 day'),
                $event->hotels_id
            );
        }

        $calendar_details = Calendar::addEvents($event_list); 

        $pricings = Pricing::all();
        $than = json_encode($pricings);
        return view('vendor.voyager.pricings.browse', compact('than'));

    }
 

    public function addEvent(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'event_name' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'hotels_id' => 'required'
        ]);
 
        if ($validator->fails()) {
            \Session::flash('warnning','Please enter the valid details');
            return redirect()->route('events.index');
        }
 
        $event = new Pricing;
        $event->event_name = $request['title'];
        $event->start_date = $request['start'];
        $event->end_date = $request['end'];
        $event->hotels_id = $request['price'];
        $event->save();

        
 
        \Session::flash('success','Event added successfully.');
        return redirect()->route('events.index');
    }
}
