<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Rate;
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
        ->select('hotels.id', 'hotels.name','rates.hotels_id','rates.price','rates.start', 'images.picture', 'images.images',  DB::raw('count(images.picture) as total'))
        ->join('images', 'hotels.id', '=', 'images.hotels_id')
        ->join('rates', 'images.hotels_id', '=', 'rates.hotels_id')
        ->groupBy('rates.hotels_id')
        ->where('rates.start', $searchDate)
        ->get();
        // echo $searchDate;
        // echo $user;
        return view('property',compact(['user','searchDate']));
    }



    public function index2()
    {
        $nerd = Rate::all();
        $items = DB::table('hotels')
        ->select('hotels.id', 'hotels.name','rates.hotels_id', 'images.picture', 'hotels.description', DB::raw('count(images.picture) as total'))
        ->join('images', 'hotels.id', '=', 'images.hotels_id')
        ->join('rates', 'images.hotels_id', '=', 'rates.hotels_id')
        ->groupBy('rates.hotels_id')
        ->get();
        return view('home', compact(['items', 'nerd']));
    }

    public function index3()
    {
        $nerd = Rate::all();
        $items = DB::table('hotels')
        ->select('hotels.id', 'hotels.name','rates.hotels_id', 'images.picture', 'hotels.description', DB::raw('count(images.picture) as total'))
        ->join('images', 'hotels.id', '=', 'images.hotels_id')
        ->join('rates', 'images.hotels_id', '=', 'rates.hotels_id')
        ->groupBy('rates.hotels_id')
        ->get();
        return view('test_home', compact(['items', 'nerd']));
    }

    // public function image()
    // {
    //     $images = Image::all();
       

    //     return view('images', compact('images'));
    // }

    public function image ()
    {
        $photos = DB::table('hotels')
        ->select('hotels.id', 'hotels.name', 'images.picture', 'images.images',  DB::raw('count(images.picture) as total'))
        ->join('images', 'hotels.id', '=', 'images.hotels_id')
        ->groupBy('hotels.id')
        ->get();
    return view ('images', compact('photos'));
    }

    public function payment(){
        return view('payment');
    }
}