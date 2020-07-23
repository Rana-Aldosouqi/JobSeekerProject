<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\User;
use App\Image;




class SettingController extends Controller
{
    public function store(Request $request , $user  ) {

        $user = Auth::User();
        $user->first_name=$request->get('first_name');
        $user->username=$request->get('username');
        $user->email=$request->get('email');
        $user->phone_number=$request->get('phone_number');
        $user->address=$request->get('address');
        $user->Hourly_Rate = $request->get('Hourly_Rate');
        $user->Availability = $request->get('Availability');
        $user->Total_Projects = $request->get('Total_Projects');
        $user->education= $request->get('education');
        $user->profession = $request->get('profession');

        return redirect('/settingsemployee');

    }
    public function received()
    {
        return view('user.userprofile');
    }


    //setting


    public function update(Request $request){
        $request->validate(['email'=> 'required','phone_number'=> 'required']);
        $user = Auth::User();
        $user->first_name=$request->get('first_name');
        $user->username=$request->get('username');
        $user->email=$request->get('email');
        $user->phone_number=$request->get('phone_number');
        $user->address= $request->get('address');
        $user->Hourly_Rate = $request->get('Hourly_Rate');
        $user->Availability = $request->get('Availability');
        $user->Total_Projects = $request->get('Total_Projects');
        $user->education = $request->get('education');
        $user->profession = $request->get('profession');
        $user->save();

        $result = Auth::attempt([
            'username' => $request->get('username'),
            'password' => $request->get('password')
        ]);
        return redirect('/settingsemployee');

    }
    public function getUpdate()
    {
        return view('/user.settingsemployee');
    }
    public function uploadImage(Request $request)
    {
        //        Upload image
        if ($request->hasFile('image'))
        {
            $image = $request->file('image');
            $filename = sha1(time()) . '.' . $image->getClientOriginalExtension();

            //$location = 'images/' . $filename;
            $isStored = $image->storeAs("assets/uploads", $filename, ["disk" => "public"]);
            //Image::make($image)->resize(800, 400)->save($location);

            $imageRec = new Image();
            $imageRec->name = $filename;
            $imageRec->extension = $image->getClientOriginalExtension();
            $imageRec->path = "assets/uploads/" . $filename;
            $imageRec->save();

            $authUser = Auth::user();
            $authUser->image_id = $imageRec->id;
            $authUser->save();
        }

        return redirect("/settingsemployee");
    }

}
