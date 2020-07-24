<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validate;
use App\User;
use App\PostApplied;
use App\Post;
use App\Image;
use App\Experience;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Carbon;
class postscontroller extends Controller
{

//companey profile
    public function getProfile()
    {
        $user = Auth::User();
            return view('user.companyprofile');

        }

    public function doGetProfile(Request $request , $user)
    {
        $user = Auth::User();
        $user->first_name = $request->get('first_name');
        $user->username = $request->get('username');
        $user->email = $request->get('email');
        $user->phone_number = $request->get('phone_number');
        $user->address = $request->get('address');
        $user->work_field = $request->get('work_field');
        $user->work_times = $request->get('work_times');
        $user->Total_Projects = $request->get('Total_Projects');
        $user->Hourly_Rate = $request->get('Hourly_Rate');
        $user->Availability = $request->get('Availability');
        $user->foundation_date = $request->get('foundation_date');
        $user->description = $request->get('description');

        return redirect('/setting');
    }
    //notifications
    public function getPostAppliedDetailsView(){
        $postsapp= Auth::user();
        return view('user.companyprofile') ;

    }
    public function getPostAppliedDetails(Request $request ){

        $postsapp= Auth::user();
        $postsapp->username = $request->get('username');
        $postsapp->email = $request->get('email');
        return view('user.companyprofile',compact('postsapp'));
    }



//company setting
    public function getUpdateView()
    {
        $user = Auth::User();
        return view('user.setting');
    }

    public function doUpdate(Request $request)
    {

        $user = Auth::User();
        $user->first_name = $request->get('first_name');
        $user->username = $request->get('username');
        $user->email = $request->get('email');
        $user->phone_number = $request->get('phone_number');
        $user->address = $request->get('address');
        $user->work_field = $request->get('work_field');
        $user->work_times = $request->get('work_times');
        $user->Total_Projects = $request->get('Total_Projects');
        $user->foundation_date = $request->get('foundation_date');
        $user->Hourly_Rate = $request->get('Hourly_Rate');
        $user->Availability = $request->get('Availability');
        $user->description = $request->get('description');
        $user->save();
        $result = Auth::attempt([
            'username' => $request->get('username'),
            'password' => $request->get('password')
        ]);
        return redirect('/companyprofile');
    }

    public function uploadImage(Request $request)
    {
        //        Upload image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = sha1(time()) . '.' . $image->getClientOriginalExtension();

        //  $location = 'images/' . $filename;
            $Stored = $image->storeAs("assets/uploads", $filename, ["disk" => "public"]);
           // Image::make($image)->resize(800, 400)->save($location);

            $imageRec = new Image();
            $imageRec->name = $filename;
            $imageRec->extension = $image->getClientOriginalExtension();
            $imageRec->path = "assets/uploads/" . $filename;
            $imageRec->save();

            $authUser = Auth::user();
            $authUser->image_id = $imageRec->id;
            $authUser->save();
        }

        return redirect("/setting");
    }




    //volanteer posts
  public function getVolanteerView()
    {

        return view('user.vol');
    }

    public function doVolanteer(){
        $volposts=Post::orderBy('created_at','DESC')->Paginate(4);

        return view('user.vol', compact('volposts'));

    }

//volanteer form
    public function getVolanteerformView()
    {

        return view('user.volform');
    }

    public function doVolanteerform(Request $request)
    {
        $request->validate([
           'job_title'=>'required|max:200',
            'city'=>'required|max:200',
            'type'=>'required|max:200',
            'age'=>'required|max:5',
            'date_start_at'=>'required|max:200',
            'time_start_at'=>'required|max:200',
            'time_end_at'=>'required|max:200',
            'vacancies'=>'required|max:5',
            'company'=>'required|max:200',
        ]);
        $volPost= new Post();
        $volPost->company=$request->get('company');
        $volPost->job_title=$request->get('job_title');
        $volPost->city=$request->get('city'); //filt
        $volPost->type=$request->get('type');//filt full or part time
        $volPost->age=$request->get('age'); //filter
        $volPost->date_start_at=$request->get('date_start_at');
        $volPost->date_end_at=$request->get('date_end_at');
        $volPost->time_start_at=$request->get('time_start_at');
        $volPost->time_end_at=$request->get('time_end_at');
        $volPost->vacancies=$request->get('vacancies');
        $volPost->other=$request->get('other');

        $volPost->save();
        return redirect("/volform")->with(['status' => 'Posting Success']);

    }

}


