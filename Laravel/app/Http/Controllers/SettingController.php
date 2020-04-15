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

        //$post=new Image();
        $user = Auth::User();
        $user->first_name=$request->get('first_name');
        $user->email=$request->get('email');
        $user->phone_number=$request->get('phone_number');
        //$user->age=$request->get('age');
        $user->address=$request->get('address');
        //$post=new Gender();
        //$post->gendertype=$request->get('name');

        //$post->user_id = $user->id;


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

       // return redirect('/settings(Employee)')->with('success','Post Created Successfully');

        return redirect('/userprofile');

        //return view('user.settings(Employee)',['post'=>$post]);
    }



    public function received()
    {
        $user = Auth::User();
        //$names = User::take(1)->get('username');
       // $emails = User::take(1)->get('email');
        //$phone = User::take(1)->get('phone_number');
       // $age=User::take(1)->get('age');
       // $workfield=Experience::take(1)->get('job_name');
       // $gendertype=Gender::take(1)->get('name');
        //$profession=Experience::take(1)->get('job_name');
       // $education=Education::take(1)->get('school');
        //$course=Course::take(1)->get('name');
        //$certificates=Certificate::take(1)->get('name');
        //$rate=User::take(1)->get('rating');
        //$totalproject=Experience::take(1)->get('total_project');
        //$englishlevel=Language::take(1)->get('english_level');


        return view('user.userprofile');
        //compact('emails', 'names', 'phone','rate'));
    }


//    public function edit($id){
//        $newdata = Auth::id();
//        return view('user.settings(Employee)',compact('newdata'));
//    }
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
