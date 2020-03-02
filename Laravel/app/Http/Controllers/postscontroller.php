<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Experience;
use App\Image;
class postscontroller extends Controller
{
    public function index()
    {
        $names = User::take(1)->get('first_name');
        $emails = User::take(1)->get('email');
        $phone = User::take(1)->get('phone_number');
        $workfield=Experience::take(1)->get('job_name');
        return view('user.companyprofile', compact('emails', 'names', 'phone','workfield'));


    }

    public function create()
    {
        return view('user.companyprofile');
   }

    public function store(Request $request){
       $request->validate(['email'=> 'required','phone_number'=> 'required','first_name'=> 'required']);
        if($request->hasFile('coverimg')){

            $file = $request->file('coverimg');
            $ext = $file->getClientOriginalExtension();
            $filename = 'cover_img' . '_' . time() . '.' . $ext;
            $path = $file->storeAs('storge/public/images', $filename);
            dd($path);
        }
        else{
            $path = 'alex.jpg';
        }

         $post=new Image();
        $post->path=$request->$path;
       $post=new user();
       $post->first_name=$request->get('first_name');
       $post->email=$request->get('email');
       $post->phone_number=$request->get('phone_number');
        $post->save();
       return redirect('/companyprofile')->with('status','account saved');
   }

    public function edit($id){
        $account=user::find($id);
        return view('user.setting',compact('account'));
    }
    public function update(Request$request,$id){
        $request->validate(['email'=> 'required','phone_number'=> 'required','first_name'=> 'required']);
        $account=user::find($id);
        $account->id=$request->id;
        $account->first_name=$request->first_name;
        $account->email=$request->email;
        $account->phone_number=$request->phone_number;
        $account->save();
        return redirect('/setting')->with('status','account updated');
    }
}


