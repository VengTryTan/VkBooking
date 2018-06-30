<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class RateController extends Controller
{
    public function handle_rate(){
    	$rates = Rate::all();
    	return view('rates', compact('rates'));
    }
}
