<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Pricing;
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
        ->select('hotels.id', 'hotels.name','pricings.hotels_id','pricings.price','pricings.date', 'images.picture', 'images.images',  DB::raw('count(images.picture) as total'))
        ->join('images', 'hotels.id', '=', 'images.hotels_id')
        ->join('pricings', 'images.hotels_id', '=', 'pricings.hotels_id')
        ->groupBy('pricings.hotels_id')
        ->where('pricings.date', $searchDate)
        ->get();
        
        return view('welcome',compact(['user','searchDate']));
    }



    public function index2()
    {
        $nerd = Pricing::all();
        $items = DB::table('hotels')
        ->select('hotels.id', 'hotels.name','pricings.hotels_id', 'images.picture', 'hotels.description', DB::raw('count(images.picture) as total'))
        ->join('images', 'hotels.id', '=', 'images.hotels_id')
        ->join('pricings', 'images.hotels_id', '=', 'pricings.hotels_id')
        ->groupBy('pricings.hotels_id')
        ->get();
    return view('testing', compact(['items', 'nerd']));
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
        echo ($photos);
    return view ('images', compact('photos'));
    }
}