<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\mail\userAdmin;

class mailController extends Controller
{
    public function send()
    {
        Mail::send(new userAdmin());
    }
}
