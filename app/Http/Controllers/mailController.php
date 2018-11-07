<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class mailController extends Controller
{
    public function send()
    {
        Mail::send(['text'=>'mail'],['name'=>'Soksan'],function($message){
            $message->to('sereysoksan16@kit.edu.kh','To SoksanRangsey')->subject('Invoice');
            $message->from('sereysoksan16@gmail.com','SoksanSerey');
        });
    }
}
