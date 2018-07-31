<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guest;
use App\Rate;
use DB;
class GuestOneController extends Controller
{
    public function search()
    {
        $items = DB::table('rates');
        return view('checkin', compact('items'));
    }
}
