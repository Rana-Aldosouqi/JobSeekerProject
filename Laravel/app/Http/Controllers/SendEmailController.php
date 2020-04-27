<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use Illuminate\Http\Request;

class SendEmailController extends Controller
{
    function index()
    {
        return view('user.send_email');
    }
    function send(Request $request)
    {
        $this->validate($request, [
            'email'  =>  'required|email',
            'message' =>  'required'
        ]);

        $data = array(
            'email' => $request -> email,
            'new_password'   =>   $request->new_password
        );

        Mail::to('')->send(new SendMail($data));
        return back()->with('Done');

    }
}
