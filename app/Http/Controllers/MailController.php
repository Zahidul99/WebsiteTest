<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use Session;
session_start();

class MailController extends Controller
{
    public function send_mail(Request $request)
    {
       $data =array(
           'subject'=> $request->subject,
           'name'=> $request->name,
           'email'=> $request->email,
           'message'=> $request->message

       );
       Mail::to("ferdosrony99@gmail.com")->send(new TestMail($data));
       Session::put('messege','Message Sent successfully !!');
       return Redirect::to('/');
    }
}
