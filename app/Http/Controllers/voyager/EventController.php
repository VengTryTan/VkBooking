<?php

namespace App\Http\Controllers\voyager;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Hotel;
use App\Pricing;
use App\Event;

use Calendar;
use Validator;

class EventController extends Controller
{
    public function index()
    {
        $hotels = Hotel::all();
        $events = Event::get();
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
        return view('vendor.voyager.pricings.browse', compact(['calendar_details', 'hotels']));
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
 
        $event = new Event;
        $event->event_name = $request['event_name'];
        $event->start_date = $request['start_date'];
        $event->end_date = $request['end_date'];
        $event->hotels_id = $request['hotels_id'];
        $event->save();
 
        \Session::flash('success','Event added successfully.');
        return redirect()->route('events.index');
    }
}
