<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validate;
use App\User;
use App\PostApplied;
use App\Post;
use App\Experience;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
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

    public function doGetProfile(Request $request)
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

    public function create()
    {
         $tables=PostApplied::all();

        return view('user.companyprofile',compact('tables'));
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

        if ($request->hasFile('name')) {
            $name = $request->input(name);
            $filename = time() .'-'. $name->getClientOriginalName();
            $location = public_path('assets/images/'.$filename);

            Image::make($name)->resize(800, 400)->save($location);

            $user->name = $filename;

        } else {
            $name = 'images.png';
        }

        $user->save();
        $result = Auth::attempt([
            'username' => $request->get('username'),
            'password' => $request->get('password')
        ]);
        return redirect('/companyprofile');
    }




    //volanteer posts
  public function getVolanteerView()
    {

        return view('user.vol');
    }

    public function doVolanteer(){
        $volposts=Post::orderBy('created_at','DESC')->Paginate(8);

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
            'vacancies'=>'required|max:5',
        ]);
        $volPost= new Post();
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
        return redirect("/vol")->with(['status' => 'Posting Success']);

    }

}


