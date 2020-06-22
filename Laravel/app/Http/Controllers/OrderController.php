<?php

namespace App\Http\Controllers;
use App\Mail\OrderStarted;
use App\Mail\OrderShipped;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function start(Request $request)
    {
        Mail::to($request->user())->send(new OrderStarted());
        return 'email sent';
    }
    public function ship(Request $request)
    {
        Mail::to($request->user())->send(new OrderShipped($request->user()->password));

//        return 'password sent';

    }
    public function complete(Request $request)
    {
        return 'complete';

    }
}
