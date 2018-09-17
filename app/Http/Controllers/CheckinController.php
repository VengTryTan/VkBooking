<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Event;
use App\Hotel;
use App\Image;

class CheckinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


     // Search for available hotels
     public function search(Request $request)
     {

        $searchDate= $request->checkin_date;

        $user = DB::table('hotels')
        ->select('hotels.id', 'hotels.name','events.event_name','events.start_date', 'images.picture',  DB::raw('count(images.picture) as total'))
        ->join('images', 'hotels.id', '=', 'images.hotels_id')
        ->join('events', 'images.hotels_id', '=', 'events.hotels_id')
        ->groupBy('events.hotels_id')
        ->where('events.start_date', $searchDate)
        ->get();
        
        return view('welcome',compact(['user','searchDate']));
    }



    public function index2()
    {
        $nerd = Event::all();
        $items = DB::table('hotels')
        ->select('hotels.id', 'hotels.name','events.event_name', 'images.picture', 'hotels.description', DB::raw('count(images.picture) as total'))
        ->join('images', 'hotels.id', '=', 'images.hotels_id')
        ->join('events', 'images.hotels_id', '=', 'events.hotels_id')
        ->groupBy('events.hotels_id')
        ->get();
    return view('testing', compact(['items', 'nerd']));
    }

}