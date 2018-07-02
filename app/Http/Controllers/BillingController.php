<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bill;

class BillingController extends Controller
{
    public function handle_billing()
    {
        $bill = Bill::all();
        return view('bill', compact('bill'));
    }
}
