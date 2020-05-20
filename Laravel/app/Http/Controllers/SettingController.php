<?php

namespace App\Http\Controllers;

use App\Certificate;
use App\Course;
use App\Education;
use App\Experience;
use App\Gender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Validation\ValidatesRequests;
//use Intervention\Image\Facades\Image;
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

        $experience = new Experience();
        $experience->user_id =Auth::user()->id;
        $experience->job_name=$request->get('job_name');
        $experience->all_jobs=$request->get('all_jobs');
        $experience->save();

        $education =new Education();
        $education->user_id =Auth::user()->id;
        $education->language=$request->get('language');
        $education->degree=$request->get('degree');

        $course = new Course();
        $course->user_id =Auth::user()->id;
        $course->name=$request->get('course');

        $certificate = new Certificate();
        $certificate->user_id =Auth::user()->id;
        $certificate->name=$request->get('certificate');


//        $this->validate($request, [
//            'select_file'  => 'required|image|mimes:jpg,png,gif|max:2048'
//        ]);
//
//        $image = $request->file('select_file');
//
//        $new_name = rand() . '.' . $image->getClientOriginalExtension();
//
//        $image->move(public_path('assets/images'), $new_name);
//        return back()->with('success', 'Image Uploaded Successfully')->with('path', $new_name);


        return redirect('/settingsemployee');

    }
    public function received()
    {
        $user = Auth::User();
        $experiences = Experience::orderBy('created_at','DESC')
            ->where('user_id',Auth::user()->id)->get();
        $educations = Education::orderBy('created_at','DESC')
            ->where('user_id',Auth::user()->id)->get();
        $courses = Course::orderBy('created_at','DESC')
            ->where('user_id',Auth::user()->id)->get();
        $certificates = Certificate::orderBy('created_at','DESC')
            ->where('user_id',Auth::user()->id)->get();
        return view('user.userprofile'
        ,compact(
            'experiences' ,
            'educations',
            'courses' ,
            'certificates'
            ));
    }


    //setting


    public function update(Request $request){


//        $request->validate([
//            'job_name'=>'required|max:50',
//            'all_jobs'=>'required|max:200',
//            'language'=>'required|max:200',
//            'degree'=>'required|max:5',
//            'course'=>'required|max:200',
//            'certificate'=>'required|max:5',
//        ]);

        $user = Auth::User();
        $user->first_name=$request->get('first_name');
        $user->username=$request->get('username');
        $user->email=$request->get('email');
        $user->phone_number=$request->get('phone_number');
        $user->address= $request->get('address');
        $user->Hourly_Rate = $request->get('Hourly_Rate');
        $user->Availability = $request->get('Availability');
        $user->Total_Projects = $request->get('Total_Projects');
        $user->save();

        $experience = new Experience();
        $experience->user_id =Auth::user()->id;
        $experience->all_jobs=$request->get('all_jobs');
        $experience->job_name=$request->get('job_name');
        $experience->save();

        $education =new Education();
        $education->user_id =Auth::user()->id;
        $education->language=$request->get('language');
        $education->degree=$request->get('degree');
        $education->save();

        $course = new Course();
        $course->user_id =Auth::user()->id;
        $course->name=$request->get('course');
        $course->save();

        $certificate = new Certificate();
        $certificate->user_id =Auth::user()->id;
        $certificate->name=$request->get('certificate');
        $certificate->save();

        $result = Auth::attempt([
            'username' => $request->get('username'),
            'password' => $request->get('password')
        ]);
        return redirect('/settingsemployee');

    }
    public function getUpdate()
    {
        $user = Auth::User();
        $experiences = Experience::orderBy('created_at','DESC')
            ->where('user_id',Auth::user()->id)->get();
        $educations = Education::orderBy('created_at','DESC')
            ->where('user_id',Auth::user()->id)->get();
        $courses = Course::orderBy('created_at','DESC')
            ->where('user_id',Auth::user()->id)->get();
        $certificates = Certificate::orderBy('created_at','DESC')
            ->where('user_id',Auth::user()->id)->get();
        return view('/user.settingsemployee',
        compact(
            'experiences' ,
            'educations' ,
            'courses' ,
            'certificates'
        ));
    }
//    public function uploadImage(Request $request)
//    {
//        //        Upload image
//        if ($request->hasFile('image')) {
//            $image = $request->input(image);
//            $filename = time() . '-' . $image->getClientOriginalName();
//            $location = public_path('assets/images/' . $filename);
//
//            Image::make($image)->resize(800, 400)->save($location);
//
//            $image = new Image();
//            $image->user_id = Auth::user()->id;
//            $image->name = $filename;
//            $image->name = $request->get('image');
//        } else {
//            $name = 'noimage.jpg';
//        }
//
//    }
//
//    public function doImage(Request $request)
//    {
//        $images = Image::orderBy('created_at','DESC')
//            ->where('user_id',Auth::user()->id)->get();
//        return view('/user.settingsemployee',
//            compact('images'));
//    }
}
