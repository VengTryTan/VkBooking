<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rate;
use DB;

class RateController extends Controller
{
    public function handle_rate(){
    	$rates = DB::table('rates')
        ->select('rates.id', 'rates.type_ID', 'rates.date', 'rates.price', 'types.id', 'types.name', 'types.description', 'images.id', 'images.type_ID', 'images.image')
        ->join('types', 'types.id', '=', 'rates.type_ID')
        ->join('images', 'images.id', '=', 'rates.type_ID')
        ->get();
    	return view('superadmin/rates', compact('rates'));
}
}