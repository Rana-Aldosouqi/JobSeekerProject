<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\ForgotPassword;
use Illuminate\Http\Request;
//use App\User;
//use Illuminate\Support\Facades\Password;

use sendResetLink;

class ForgotPasswordController extends Controller
{
//    public function send(Request $request)
//    {
//        $user = User::where('email', $request->email)->first();
//        if (!$user) {
//            $error_message = "Your email address was not found.";
//            return response()->json(['success' => false, 'error' => ['email'=> $error_message]], 401);
//        }
//        try {
//            Password::sendResetLink($request->only('email'), function (Message $message) {
//                $message->subject('Your Password Reset Link');
//            });
//        } catch (\Exception $e) {
//            $error_message = $e->getMessage();
//            return response()->json(['success' => false, 'error' => $error_message], 401);
//        }
//        return response()->json([
//            'success' => true, 'data'=> ['message'=> 'A reset email has been sent! Please check your email.']
//        ]);
//    }
    function index()
    {
        if (Auth::check()) {
            return redirect('/');
        }
        return view('user.ForgotPassword');
//        return view('user.ForgotPassword');
    }
    function send(Request $request)
    {
        $this->validate($request, [
            'email'  =>  'required|email',
//            'new_password' =>  'required'
        ]);

        $data = array(
            'email' => $request -> email,
//            'new_password'   =>   $request->new_password
        );

        Mail::to('eeman.hamdy97@gamil.com')->send(new ForgotPassword($data));
        return back()->with('success', 'Mail is sent');

    }
}
