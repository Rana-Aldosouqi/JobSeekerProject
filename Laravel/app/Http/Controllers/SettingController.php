<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Intervention\Image\Facades\Image;
use App\User;




class SettingController extends Controller
{
    public function store(Request $request , $user) {

        $request->validate(['title' => 'bail|required|min:3', 'body' => 'required', 'photo' => 'image|mimes:jpeg,png,jpg|max:2048', 'first_name' => 'required', 'email'
        =>'required', 'phone_number' => 'required' , 'address' =>'required']);

        $user = Auth::User();
        $user->first_name=$request->get('first_name');
        $user->email=$request->get('email');
        $user->phone_number=$request->get('phone_number');
        //$user->age=$request->get('age');
        $user->address=$request->get('address');
      


        //Upload image
        if ($request->hasFile('name')) {
            $name = $request->input(name);
            $filename = time() .'-'. $name->getClientOriginalName();
            $location = public_path('assets/images/'.$filename);

            Image::make($name)->resize(800, 400)->save($location);

            $user->name = $filename;

        } else {
            $name = 'noimage.jpg';
        }



        $user->save($request->all());

 
        return redirect('/userprofile');
    }



    public function received()
    {
        $user = Auth::User();
    
        return view('user.userprofile');
        
    }


    public function getUpdate()
    {
        return view('user.settingsemployee');
    }


    public function update(Request$request,$id){

        $user_id= Auth::user()->id;
        $user = Auth::User();
        $user->first_name=$request->get('first_name');
        $user->email=$request->get('email');
        $user->phone_number=$request->get('phone_number');
       // $user->age= $request->get('age');
        $user->address= $request->get('address');
        $user->save();

        $result = Auth::attempt([
            'username' => $request->get('username'),
            'password' => $request->get('password'),
            'email' => $request->get('email'),
            'phone_number' => $request->get('phone_number'),
            'address' => $request->get('address')
        ]);
        return redirect('/settingsemployee');

    }

}
