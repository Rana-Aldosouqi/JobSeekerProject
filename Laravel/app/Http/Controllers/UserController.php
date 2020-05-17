<?php

namespace App\Http\Controllers;
use App\Skill;
use App\Certificate;
use App\Course;
use App\Education;
use App\Experience;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
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