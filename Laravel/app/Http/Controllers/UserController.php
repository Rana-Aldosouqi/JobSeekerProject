<?php

namespace App\Http\Controllers;


use App\Education;
use App\Experience;
use DB;
use App\Skill;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
//    public function getIndexView()
//    {
//        return view('/index');
//
//    }
    public function getResumeBuilderView()
    {
//        $user = User::find($id);
//        if($user == null){
//            return redirect('/');
//        }
//        if (Auth::check()) {
//            return redirect('/ResumeBuilder');
//        }
        return view('user.ResumeBuilder');
    }
//    public function getPersonalView()
//    {
////        $user = User::find($id);
////        if($user == null){
////            return redirect('/');
////        }
////        if (Auth::check()) {
////            return redirect('/ResumeBuilder');
////        }
//        return view('user.ResumeBuilder/personal');
//    }

//    public function doUploadImage(Request $request)
//    {
//        $user = User::find($id);
//        if($user == null|| $user->id != Auth::user()->id)
//        {
//            return redirect('/');
//        }
//        $rules = [
//            'image' => 'max:2048|mimes:jpg,jpeg,png'
//        ];
//        $validator = Validator::make($request->all(), $rules);
//        if ($validator->fails()) {
//            return redirect('/')->back()
//                ->withInput($request->all())
//                ->withErrors($validator->errors());
//        }
//        $image = $request->file('image');
//        $ext = $image->getClientOriginalExtension();
//        $name = $image->getClientOriginalName();
//        $newname = sha1(time()) . $ext;
//        storage::disk('public')->put($newname, File::get($image));
//    }
//    public function doUploadFile(Request $request,$id)
//    {
////        $user = User::find($id);
////        if($user == null|| $user->id != Auth::user()->id)
////        {
////            return redirect('/');
////        }
//        $rules = [
//            'file' => 'max:2048|mimes:docx,pdf'
//        ];
//        $validator = Validator::make($request->all(), $rules);
//        if ($validator->fails()) {
//            return redirect('/')->back()
//                ->withInput($request->all())
//                ->withErrors($validator->errors());
//        }
//        $file = $request->file('file');
//        $ext = $file->getClientOriginalExtension();
//        $name = $file->getClientOriginalName();
//        $newname = sha1(time()) . $ext;
//        storage::disk('public')->put($newname, File::get($file));
//    }
    public function doPersonal(Request $request)
    {
        $rules = [
            'phoneNumber' => 'required|min:10|max:20',
            'birthDate' => 'required|date',
            'militaryService' => '',
            'serveTime' => 'date',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()
                ->withInput($request->all())
                ->withErrors($validator->errors()->all());

        }

//        $user_id = Auth::user()->id;
        $user = Auth::user();
        $user->phone_number = $request->get('phoneNumber');
        $user->birth_date = $request->get('birthDate');
        $user->military_service = $request->get('militaryService');
        $user->serve_time = $request->get('serveTime');
        $user->save();

        $result = Auth::attempt([
            'username' => $request->get('username'),
            'password' => $request->get('password')
        ]);
        return redirect('/social');
    }
    public function doSocial(Request $request)
    {
        $rules=[
            'faceBookUrl' => 'url',
            'linkedInUrl' => 'url',
            'askUrl' => 'url',
            'twitterUrl' => 'url',
        ];
        $validator = Validator::make($request->all(),$rules);
        if ($validator->fails()){
            return redirect()->back()
                ->withInput($request->all())
                ->withErrors($validator->errors()->all());

        }
        $user= Auth::user();
        $user->facebook_url = $request->get('faceBookUrl');
        $user->twitter_url = $request->get('linkedInUrl');
        $user->ask_url = $request->get('askUrl');
        $user->linkedin_url = $request->get('twitterUrl');
        $user->save();

        $result = Auth::attempt([
            'username'=>$request->get('username'),
            'password'=>$request->get('password')
        ]);
        return redirect('/experiences');
    }
    public function doExperience(Request $request)
    {
        $rules = [
            'jobName' => 'required|min:1|max:50',
            'company' => 'required|min:1|max:100',
            'startDate' => 'required|date',
            'endDate' => 'required|date|after:startDate',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()
                ->withInput($request->all())
                ->withErrors($validator->errors()->all());

        }

//        $user = User::find($id);

//        $newExperience = $user->id;
        $newExperience = DB::table('users')
            ->select('users.id')
            ->leftJoin('experiences','users.id','=','experiences.user_id')
            ->get();
//        $newExperience = new Experience();
        $newExperience->job_name = $request->get('jobName');
        $newExperience->company = $request->get('company');
        $newExperience->start_date = $request->get('startDate');
        $newExperience->end_date = $request->get('endDate');
        $newExperience->save();

        $result = Auth::attempt([
            'username' => $request->get('username'),
            'password' => $request->get('password')
        ]);
        return redirect('/skills');

    }
    public function doSkill(Request $request)
    {
//        $user = User::find($id);
//        if($user == null|| $user->id != Auth::user()->id)
//        {
//            return redirect('/');
//        }
        $rules = [
            'name' => 'required|min:1|max:50',
            'rate' =>''
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect('/skills')->back()
                ->withInput($request->all())
                ->withErrors($validator->errors()->all());

        }
        $newskill = new Skill();
//        $newskill->user_id = Auth::user()->id;
        $newskill->name = $request->get('name');
        $newskill->rate = $request->get('rate');
        $newskill->save();

        $result = Auth::attempt([
            'username' => $request->get('username'),
            'password' => $request->get('password')
        ]);
        return redirect('/education');
    }
    public function doEducation(Request $request)
    {
//        $user = User::find($id);
//        if($user == null|| $user->id != Auth::user()->id)
//        {
//            return redirect('/');
//        }
        $rules = [
            'degree' => 'required|min:1|max:50',
            'school' => 'required|min:1|max:100',
            'startDate' => 'required|date',
            'endDate' => 'required|date|after:startDate',
//            'file' => 'required|mimes:doc,docx,pdf,txt|max:2048',

        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect('/education')->back()
                ->withInput($request->all())
                ->withErrors($validator->errors()->all());

        }
        $newEducation = new Education();
//        $newEducation->user_id = Auth::user()->id;
        $newEducation-> degree = $request->get('degree');
        $newEducation-> school = $request->get('school');
        $newEducation-> start_date = $request->get('startDate');
        $newEducation-> end_date = $request->get('endDate');
        return redirect('/courses');
    }
    public function doCourse(Request $request)
    {
//        $user = User::find($id);
//        if ($user == null || $user->id != Auth::user()->id)
//        {
//            return redirect('/');
//        }
//        return redirect('/color'. $id);
    }
    public function doCertificate(Request $request)
    {
//        $user = User::find($id);
//        if($user == null|| $user->id != Auth::user()->id)
//        {
//            return redirect('/');
//        }
//        return redirect('/'. $id);
    }
}

