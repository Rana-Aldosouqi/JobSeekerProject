<?php

namespace App\Http\Controllers;

use App\Certificate;
use App\Course;
use App\Education;
use App\Experience;
use App\Gender;
use App\Image;
use App\Language;
use Illuminate\Http\Request;
use App\User;
class SettingController extends Controller
{

    public function store(Request $request) {

        $request->validate([

            'profileImage' =>'image|mimes:jpg,bmp,png|max:1999'
        ]);
        if ($request->hasFile('profileImage')) {
            $file = $request->file('profileImage') ;
            $ext = $file->getClientOriginalExtension() ;
            $filename = 'profileImage' . '_' . time() . '.' . $ext ;
            $path = $file->storeAs('public/Images', $filename);

        } else {
            $filename = 'noimage.jpg';
        }


        $postimg  = new Image() ;
        $postimg->images = $filename;
        $postimg->save();
        $postimg->name = image()->image()->id;



        $post=new Image();
        $post->path=$request->$path;
        $post=new user();
        $post->first_name=$request->get('first_name');
        $post->email=$request->get('email');
        $post->phone_number=$request->get('phone_number');
        $post->age=$request->get('age');
        $post->rate=$request->get('rating');
        $post=new Gender();
        $post->gendertype=$request->get('name');


        $post->save();
        return redirect('/companyprofile')->with('status','account saved');
        //return redirect('/AccountSettings(Employee)')->with('status', 'Post was created !');
        return view('user.settings(Employee)',['post'=>$post]);
    }



    public function received()
    {
        $names = User::take(1)->get('username');
        $emails = User::take(1)->get('email');
        $phone = User::take(1)->get('phone_number');
        $age=User::take(1)->get('age');
        $workfield=Experience::take(1)->get('job_name');
        $gendertype=Gender::take(1)->get('name');
        $profession=Experience::take(1)->get('job_name');
        $education=Education::take(1)->get('school');
        $course=Course::take(1)->get('name');
        $certificates=Certificate::take(1)->get('name');
        $rate=User::take(1)->get('rating');
        $totalproject=Experience::take(1)->get('total_project');
        $englishlevel=Language::take(1)->get('english_level');


        return view('user.userprofile', compact('emails', 'names', 'phone','age', 'workfield','gendertype','profession' ,'education','course','certificates','rate','totalproject','englishlevel'));


    }
    public function create()
    {
        return view('user.userprofile');
    }

    public function edit($id){
        $newdata=user::find($id);
        return view('user.settings(Employee)',compact('newdata'));
    }


    public function update(Request$request,$id){
        $request->validate(['email'=> 'required','phone_number'=> 'required','first_name'=> 'required']);
        $newdata=user::find($id);
        $newdata->id=$request->id;
        $newdata->first_name=$request->first_name;
        $newdata->email=$request->email;
        $newdata->phone_number=$request->phone_number;
        $newdata ->age= $request->age;
        $newdata ->gender= $request->name;
        $newdata->save();
        return redirect('/settings(Employee)')->with('status','newdata updated');
    }



}
