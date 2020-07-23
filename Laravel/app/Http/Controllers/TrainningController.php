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

class TrainningController extends Controller
{
    //posts
    public function getTrainView()
    {

        return view('user.Train');
    }

    public function doTrain(){
        $Trainposts=Post::orderBy('created_at','DESC')->Paginate(5);

        return view('user.Train', compact('Trainposts'));

    }

// form
    public function getTrainFormView()
    {

        return view('user.Trainform');
    }

    public function doTrainForm(Request $request)
    {
        $request->validate([
            'job_title'=>'required|max:200',
            'career_level'=>'required|max:200',
            'type'=>'required|max:200',
            'city'=>'required|max:200',
            'vacancies'=>'required|max:200',
            'company'=>'required|max:200',
            'date_start_at'=>'required|max:200',


        ]);
        $trnPost= new Post();
        $trnPost->company=$request->get('company');//copm name
        $trnPost->job_title=$request->get('job_title');
        $trnPost->vacancies=$request->get('vacancies');
        $trnPost->type=$request->get('type');//filt spec
        $trnPost->city=$request->get('city');//filt
        $trnPost->date_start_at=$request->get('date_start_at');
        $trnPost->date_end_at=$request->get('date_end_at');
        $trnPost->time_start_at=$request->get('time_start_at');
        $trnPost->time_end_at=$request->get('time_end_at');
        $trnPost->career_level=$request->get('career_level');//fillstudent
        $trnPost->min_salary=$request->get('min_salary');
        $trnPost->max_salary=$request->get('max_salary');
        $trnPost->other = $request->get('other');

        $trnPost->save();
        return redirect("/Trainform")->with(['status' => 'Posting Success']);

    }



}
