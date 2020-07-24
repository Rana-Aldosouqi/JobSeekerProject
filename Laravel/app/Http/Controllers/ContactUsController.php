<?php

namespace App\Http\Controllers;

use App\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ContactUsController extends Controller
{
    public function getContactUSView(){
//        $feedbacks = Feedback::latest()->approved()->published()->paginate(6);
        return view('user.ContactUs');
    }
    public function doContact(Request $request){
        $rules = [
            'name' => 'required|min:3',
            'email' => 'required',
            'message' => 'required',
//            'published'=>'',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()
                ->withInput($request->all())
                ->withErrors($validator->errors()->all());
        }
        if(Auth::check()){
            $feedback = new Feedback();
            $feedback -> user_id = Auth::user()->id;
            $feedback -> name = $request -> get('name');
            $feedback -> email = $request -> get('email');
            $feedback -> message = $request -> get('message');
//            $feedback -> published = $request -> get('published');
            $feedback ->save();
        }
        else{
            $feedback = new Feedback();

            $feedback -> name = $request -> get('name');
            $feedback -> email = $request -> get('email');
            $feedback -> message = $request -> get('message');
//            $feedback -> published = $request -> get('published');
            $feedback ->save();
        }

        $result = Auth::attempt([
            'username' => $request->get('username'),
            'password' => $request->get('password')
        ]);
        return redirect('/ContactUs');
    }
}
