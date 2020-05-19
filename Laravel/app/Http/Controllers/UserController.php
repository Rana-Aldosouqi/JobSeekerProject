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
    public function changePasswordRules(array $data)
    {
        $messages = [
            'current-password.required' => 'Please enter current password',
            'password.required' => 'Please enter password',
        ];

        $validator = Validator::make($data, [
            'current-password' => 'required',
            'password' => 'required|same:password',
            'password_confirmation' => 'required|same:password',
        ], $messages);

        return $validator;
    }
    public function ChangePassword(Request $request)
    {
        if (Auth::Check()) {
            $request_data = $request->All();
            $validator = $this->changePasswordRules($request_data);
            if ($validator->fails()) {

                return response()->json(array('error' => $validator->getMessageBag()->toArray()), 400);
            } else {

                $current_password = Auth::User()->password;

                if (Hash::check($request_data['current-password'], $current_password)) {
                    $user_id = Auth::User()->id;
                    $obj_user = User::find($user_id);
                    $obj_user->password = Hash::make($request_data['password']);
                    $obj_user->save();
                    return view('Home');
                } else {
                    $error = array('current-password' => 'Please enter correct current password');
                    return response()->json(array('error' => $error), 400);
                }
            }
        } else {
            return redirect()->to('/');
        }
    }
//    public function ChangePassword(Request $request)
//    {
//        if (!(Hash::check($request->get('old_password'), Auth::user()->password))) {
//            // The passwords not matches
//            //return redirect()->back()->with("error","Your current
//            // password does not matches with the password you provided. Please try again.");
//            return response()->json(['errors' => ['current'=> ['Current password does not match']]], 422);
//        }
//        //uncomment this if you need to validate that the new password is same as old one
//
//        if(strcmp($request->get('old_password'), $request->get('new_password')) == 0){
//            //Current password and new password are same
//            //return redirect()->back()->with("error","New Password cannot be same as your current password.
//            // Please choose a different password.");
//            return response()->json(['errors' => ['current'=> ['New Password cannot be same as your current
//             password']]], 422);
//        }
//        $validatedData = $request->validate([
//            'old_password' => 'required',
//            'new_password' => 'required|string|min:6|confirmed',
//        ]);
//        //Change Password
//        $user = Auth::user();
//        $user->password = Hash::make($request->get('new_password'));
//        $user->save();
//        return $user;
//
//    }
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