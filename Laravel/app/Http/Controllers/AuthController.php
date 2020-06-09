<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use DB;
use Hash;
use Carbon;
class AuthController extends Controller
{
    public function getLoginView(){
        if(Auth::check()){
            return redirect('/index');
        }
        return view('user.Login');
    }
    public function getRegisterView(){
        if(Auth::check()){
            return redirect('/');
        }
        return view('user.Register');
    }
    public function doLogout(){
        Auth::logout();
        return redirect('/Login');
    }
    public function doLogin(Request $request){
        $rules =[
            'username' => 'required|min:4|max:100',
            'password' => 'required|min:4|max:100',
        ];

        $validator = Validator::make($request->all(),$rules);
        if($validator->fails()){
            return redirect()->back()
                ->withInput($request->all())
                ->withErrors($validator->errors()->all());
        }

        $username=$request->get('username');
        $password=$request->get('password');

        // to make encryption and compare the encrypted passwords Ans => True or False
        $result = Auth::attempt([
            'username'=>$username,
            'password'=>$password
        ]);
        if ($result) {
            return redirect('/Home');
        } else{
            return redirect('/Login')->with(['error'=>'Authentication Failed']);
        }

    }

    public function doRegistration(Request $request){
        $rules=[
            'firstName' => 'required|min:4|max:60',
            'lastName' => 'required|min:4|max:60',
            'username' => 'required|min:4|max:100|unique:users,username',
            'email' => 'required|email|min:4|max:125|unique:users,email',
            'password' => 'required|min:4|max:100',
            'gender' => '',
            'user_type'=>'required',
        ];
        $validator = Validator::make($request->all(),$rules);
        if ($validator->fails()){
            return redirect()->back()
                ->withInput($request->all())
                ->withErrors($validator->errors()->all());

        }
        $newUser = new User();
        $newUser->first_name = $request->get('firstName');
        $newUser->last_name = $request->get('lastName');
        $newUser->username = $request->get('username');
        $newUser->email = $request->get('email');
//        $newUser-> Gender::create(['Female'=> 'others']);
        $newUser->password = bcrypt($request->get('password'));
        $newUser->gender_id = $request->get('gender');
        $newUser->user_type = $request->get('user_type');

        $newUser->save();

        $result = Auth::attempt([
            'username'=>$request->get('username'),
            'password'=>$request->get('password')
        ]);

        if(Auth::user()->user_type == 'Company'){
            return redirect('/companyprofile');
        } elseif(Auth::user()->user_type == 'Seeker')
        {
            return redirect('/userprofile');
        }
    }

    //ResetPassword
    public function passwordResetTokenView()
   {
        if (Auth::check()) {
            return redirect('/');
        }
        return view('ResetPassword');
    }

    public function sendPasswordResetToken(Request $request)
    {
        $user = User::where('email', $request->email) -> first();
        if (!$user) return redirect()->back()->withErrors(['error' => '404']);
        DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' => sha1(time()),
            'created_at' => Carbon::now()
        ]);
        $tokenData = DB::table('password_resets')
            ->where('email', $request->email)->first();
        $token = $tokenData->token;
        $email = $request->email;
    }

    public function PasswordResetView($token){
        $tokenData = DB::table('password_resets')
            ->where('token', $token)->first();

        if ( !$tokenData ) return redirect()->to('/ResetPasswordSendToken');
        return view('/');
    }
    public function resetPassword(Request $request, $token)
    {
        $password = $request->password;
        $tokenData = DB::table('password_resets')
            ->where('token', $token)->first();

        $user = User::where('email', $tokenData->email)->first();
        if ( !$user ){
            return redirect()->to('/'); //or wherever you want
        }
        $user->password = Hash::make($password);
        $user->save();
        Auth::Login($user);
        DB::table('password_resets')->where('email', $user->email)->delete();
    }
}
