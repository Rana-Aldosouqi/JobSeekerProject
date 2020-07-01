<?php

namespace App\Http\Controllers;

use App\Certificate;
use App\Course;
use App\Education;
use App\Experience;
use App\Image;
use App\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ResumeBuilderController extends Controller
{
     public function getResumeBuilderView()
     {
         $allCertificates = Certificate::orderBy('created_at','DESC')
             ->where('user_id', Auth::user()->id)->get();
         return view('user.ResumeBuilder',[
             'data' => $allCertificates
         ]);
    }
//    public function doUploadImage(Request $request)
//    {
//        //        Upload image
//        if ($request->hasFile('image')) {
//            $image = $request->file('image');
//            $filename = sha1(time()) . '.' . $image->getClientOriginalExtension();
//
//            //$location = 'images/' . $filename;
//            $isStored = $image->storeAs("assets/uploads", $filename, ["disk" => "public"]);
//            //Image::make($image)->resize(800, 400)->save($location);
//
//            $imageRec = new Image();
//            $imageRec->name = $filename;
//            $imageRec->extension = $image->getClientOriginalExtension();
//            $imageRec->path = "assets/uploads/" . $filename;
//            $imageRec->save();
//
//            $authUser = Auth::user();
//            $authUser->image_id = $imageRec->id;
//            $authUser->save();
//        }
//
//        return redirect("/personal");
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
    public function getPersonalView()
    {
        $allCertificates = Certificate::orderBy('created_at','DESC')
            ->where('user_id', Auth::user()->id)->get();
        return view('user.ResumeBuilder',[
            'data' => $allCertificates
        ]);
    }
    public function doPersonal(Request $request)
    {
        $rules = [
            'phoneNumber' => 'required|min:10|max:20',
            'birthDate' => 'required|date',
            'militaryService' => '',
            'serveTime' => '',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()
                ->withInput($request->all())
                ->withErrors($validator->errors()->all());
        }
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
    public function getSocialView()
    {
        $allCertificates = Certificate::orderBy('created_at','DESC')
            ->where('user_id', Auth::user()->id)->get();
        return view('user.ResumeBuilder',[
            'data' => $allCertificates
        ]);
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
    public function getExperienceViewBuilder()
    {
        $allExperiences = Experience::orderBy('created_at', 'ASC')
            ->where('user_id', Auth::user()->id)->get();
        return view('user.ResumeBuilder'  ,[
            'data' => $allExperiences
        ]);
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
        $experience = new Experience();
        $experience->user_id = Auth::user()->id;
        $experience->job_name = $request->get('jobName');
        $experience->company = $request->get('company');
        $experience->start_date = $request->get('startDate');
        $experience->end_date = $request->get('endDate');
        $experience->save();

        $result = Auth::attempt([
            'username' => $request->get('username'),
            'password' => $request->get('password')
        ]);
        return redirect('/experiences');

    }
    public function deleteExperience($id){
        $experience = Experience::where('id',$id)->first();

        if ($experience != null) {
            $experience->delete();
            return redirect('/experiences');
        }
        return redirect('/experiences');
    }


    public function getSkillViewBuilder()
    {
        $allSkills = Skill::orderBy('created_at', 'ASC')
            ->where('user_id', Auth::user()->id)->get();
        return view('user.ResumeBuilder',[
            'data' => $allSkills
        ]);
    }
//    function AddSkill(Request $request)
//    {
//        if($request->ajax())
//        {
//            $rules = array('skill.*'  => 'required');
//            $error = Validator::make($request->all(), $rules);
//            if($error->fails())
//            {
//                return response()->json([
//                    'error'  => $error->errors()->all()
//                ]);
//            }
//
//            $skill = $request->skill;
//            for($count = 0; $count < count($skill); $count++)
//            {
//                $data = array(
//                    'skill' => $skill[$count]
//                );
//                $insert_data[] = $data;
//            }
//
//            Skill::insert($insert_data);
//            return response()->json([
//                'success'  => 'Data Added successfully.'
//            ]);
//        }
//    }
    public function AddSkill(Request $request)
    {
        $rules = ['skill' => 'required'];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()
                ->withInput($request->all())
                ->withErrors($validator->errors()->all());
        }
        $skill = new Skill();
        $skill-> user_id = Auth::user()->id;
        $skill-> skill = $request->get('skill');
        $skill->save();
        $result = Auth::attempt([
            'username' => $request->get('username'),
            'password' => $request->get('password')
        ]);
        return redirect('/skills');
    }
    public function deleteSkill($id){
        $skill = Skill::where('id',$id)->first();

        if ($skill != null) {
            $skill->delete();
            return redirect('/skills');
        }
        return redirect('/skills');
    }
    public function getEducationViewBuilder()
    {
        $allEducation = Education::orderBy('created_at','DESC')
            ->where('user_id', Auth::user()->id)->get();
        ;
        return view('user.ResumeBuilder',[
            'data' => $allEducation
        ]);
    }
    public function doEducation(Request $request)
    {
        $rules = [
            'degree' => 'required|min:1|max:50',
            'school' => 'required|min:1|max:100',
            'startDate' => 'required|date',
            'endDate' => 'required|date|after:startDate',
//            'file' => 'required|mimes:doc,docx,pdf,txt|max:2048',

        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()
                ->withInput($request->all())
                ->withErrors($validator->errors()->all());

        }
        $education = new Education();
        $education->user_id = Auth::user()->id;
        $education-> degree = $request->get('degree');
        $education-> school = $request->get('school');
        $education-> start_date = $request->get('startDate');
        $education-> end_date = $request->get('endDate');
        $education->save();

        $result = Auth::attempt([
            'username' => $request->get('username'),
            'password' => $request->get('password')
        ]);
        return redirect('/education');
    }
    public function deleteEducation($id){
        $education = Education::where('id',$id)->first();

        if ($education != null) {
            $education->delete();
            return redirect('/education');
        }
        return redirect('/education');
    }
    public function getCourseViewBuilder(){
        $allCourses = Course::orderBy('created_at','ASC')
            ->where('user_id', Auth::user()->id)->get();
        ;
        return view('user.ResumeBuilder',[
            'data' => $allCourses
        ]);
    }
    public function addCourse(Request $request)
    {
        $rules = [
            'date'=>'required|date',
            'course' => 'required',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()
                ->withInput($request->all())
                ->withErrors($validator->errors()->all());
        }
        $course = new Course();
        $course-> user_id = Auth::user()->id;
        $course-> course = $request->get('course');
        $course-> date = $request->get('date');
        $course->save();
        $result = Auth::attempt([
            'username' => $request->get('username'),
            'password' => $request->get('password')
        ]);
        return  redirect('/courses');    }
    public function deleteCourse($id)
    {
        $course = Course::where('id',$id)->first();

        if ($course != null)
        {
            $course->delete();
            return  redirect('/courses');
        }
        return  redirect('/courses');
    }
    public function getCertificateViewBuilder()
    {
        $allCertificates = Certificate::orderBy('created_at','ASC')
            ->where('user_id', Auth::user()->id)->get();
        ;
        return view('user.ResumeBuilder',[
            'data' => $allCertificates
        ]);
    }
    public function AddCertificate(Request $request)
    {
        $rules = [
            'date'=>'required|date',
            'certificate' => 'required',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()
                ->withInput($request->all())
                ->withErrors($validator->errors()->all());
        }
        $certificate = new Certificate();
        $certificate-> user_id = Auth::user()->id;
        $certificate-> certificate = $request->get('certificate');
        $certificate-> date = $request->get('date');
        $certificate->save();

        $result = Auth::attempt([
            'username' => $request->get('username'),
            'password' => $request->get('password')
        ]);
        return redirect('/certificates');
    }
    public function deleteCertificate($id)
    {
        $certificate = Certificate::where('id',$id)->first();
        if ($certificate != null) {
            $certificate->delete();
            return redirect('/certificates');
        }
        return redirect('/certificates');
    }
    public function changeColor(Request $request)
    {
        $rules = [
            'color' => 'required'
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()
                ->withInput($request->all())
                ->withErrors($validator->errors()->all());
        }
        $user = Auth::user();
        $user->color = $request->get('color');
        $user->save();

        $result = Auth::attempt([
            'username' => $request->get('username'),
            'password' => $request->get('password')
        ]);
        return redirect('/MyResume');
    }
    public function getColorView()
    {
        $allCertificates = Certificate::orderBy('created_at','DESC')
            ->where('user_id', Auth::user()->id)->get();
        return view('user.ResumeBuilder',[
            'data' => $allCertificates
        ]);
    }
}
