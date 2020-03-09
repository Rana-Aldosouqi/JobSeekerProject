<?php

namespace App\Http\Controllers;

use App\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ContactUsController extends Controller
{
    public function contactUsView(){
        return view('user.ContactUs');
    }
    public function doContact(Request $request){
        $rules = [
            'name' => 'required|min:3',
            'email' => 'required',
            'message' => ''
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()
                ->withInput($request->all())
                ->withErrors($validator->errors()->all());
        }
        $feedback = new Feedback();
        $feedback -> name =$request -> get('name');
        $feedback -> email =$request -> get('email');
        $feedback -> message = $request -> get('message');
        $feedback->save();

        $result = Auth::attempt([
            'username' => $request->get('username'),
            'password' => $request->get('password')
        ]);
        return redirect('/user.ContactUs');
    }
}
