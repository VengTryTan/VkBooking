<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Checkin;
use DB;
use App\Rate;

class CheckinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('checkin');
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
        $item=new Checkin();
        $item->fname=$request->fname;
        $item->phone=$request->phone;
        $item->email=$request->email;
        $item->address=$request->address;
        $item->city=$request->city;
        $item->cardname=$request->cardname;
        $item->cvv=$request->cvv;
        $item->cardnumber=$request->cardnumber;
        $item->month=$request->month;
        $item->year=$request->year;
        $item->save();
        return view('success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $nerd = Rate::where('id', $id)->firstOrFail();;
        return View::make('checkin')
            ->with('nerd', $nerd);
    }

    public function search(Request $request){
        $searchDate= $request->checkin_date;
        $user = DB::table('types')
        ->select('types.id', 'types.name','rates.price','rates.date', 'images.image',  DB::raw('count(images.image) as total'))
        ->join('images', 'types.id', '=', 'images.type_ID')
        ->join('rates', 'images.type_ID', '=', 'rates.type_ID')
        ->groupBy('rates.type_ID')
        ->where('rates.date', $searchDate)
        ->get();
        echo($searchDate);
         echo($user);
        
        return view('welcome',compact(['user','searchDate']));
      }
      public function searchone(Request $request){
       // $searchDate= $request->checkin_date;
        $searchDate = $request->searchDate;
        $user = DB::table('types')
        ->select('types.id', 'types.name','rates.price','rates.date', 'images.image',  DB::raw('count(images.image) as total'))
        ->join('images', 'types.id', '=', 'images.type_ID')
        ->join('rates', 'images.type_ID', '=', 'rates.type_ID')
        ->groupBy('rates.type_ID')
        ->orderBy('rates.price', 'asc')
        ->where('rates.date', $date)
        ->get();

        return view('welcome',compact(['user','searchDate']));
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
}