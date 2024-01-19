<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\sendmail;
use Illuminate\Support\Facades\Mail;

class Mailsend extends Controller
{
    public function send(Request $request){

        Mail::to($request->email)->send(new sendmail($request->name,$request->email,$request->phone,$request->subject,$request->content));
        return back();
    }
}
