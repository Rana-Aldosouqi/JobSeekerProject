<?php

namespace App\Http\Controllers;
use App\User;
use App\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Validation\ValidatesRequests;

class CourseController extends Controller
{
    public function getcourseView()
    {
        return view('/user.addCourses');
    }
    public function addCourses(Request $request){

          $addcourse =new\App\Course();
          $addcourse->user_id =Auth::user()->id;
          $addcourse->course = $request ->get('course');
          $addcourse->start_date = $request ->get('start_date');
          $addcourse->end_date = $request ->get('end_date');
          $addcourse->specialization = $request ->get('specialization');
          $addcourse->course_level = $request ->get('course_level');
          $addcourse->language = $request ->get('language');
          $addcourse->salary = $request ->get('salary');
          $addcourse->time= $request ->get('time');
          $addcourse->phone = $request ->get('phone');
          $addcourse-> save();

        $result = Auth::attempt([
            'username' => $request->get('username'),
            'password' => $request->get('password')
        ]);

        return redirect('/course')->with(['status' => 'Posting Success']);
    }

    public function courseView()
    {
        return view('/user.course');
    }
    public function postcourse(){
        $newcourses=Course::orderBy('created_at','DESC')
            ->Paginate(10);

        return view('user.course', ['newcourses' => $newcourses]);
    }

}
