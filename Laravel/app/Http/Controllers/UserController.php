<?php

namespace App\Http\Controllers;
use App\Skill;
use App\Certificate;
use App\Course;
use App\Education;
use App\Experience;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Hash;
use App\User;
class UserController extends Controller
{

    public function getChangePasswordView()
    {
        return view('user.ChangePassword');
    }
    public function ChangePassword(Request $request)
    {
        $rules =[
            'current-password' => 'required',
            'password' => 'required|same:password',
            'password_confirmation' => 'required|same:password',
        ];
        if (Auth::Check()) {
            $request_data = $request->All();
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                return redirect()->back()
                    ->withInput($request->all())
                    ->withErrors($validator->errors()->all());
            }
            else {

                $current_password = Auth::User()->password;

                if (Hash::check($request_data['current-password'], $current_password)) {
                    $user_id = Auth::User()->id;
                    $obj_user = User::find($user_id);
                    $obj_user->password = Hash::make($request_data['password']);
                    $obj_user->save();
                    return view('Home');
                } else {
                    return redirect()->back()
                        ->withInput($request->all())
                        ->withErrors('Please enter correct current password');
                }
            }
        }
        else {
            return redirect('/user.login');
        }
    }
    public function getMyResumeView()
    {
        $skills = Skill::orderBy('created_at', 'DESC')
            ->where('user_id', Auth::user()->id)->get();

        $experiences = Experience::orderBy('created_at', 'DESC')
            ->where('user_id', Auth::user()->id)->get();

        $educations = Education::orderBy('created_at', 'DESC')
            ->where('user_id', Auth::user()->id)->get();

        $courses = Course::orderBy('created_at', 'DESC')
            ->where('user_id', Auth::user()->id)->get();

        $certificates = Certificate::orderBy('created_at', 'DESC')
            ->where('user_id', Auth::user()->id)->get();

        return view('/user.MyResume', compact(
            'skills'
            , 'experiences'
            , 'educations'
            , 'courses'
            , 'certificates'
        ));
    }
}