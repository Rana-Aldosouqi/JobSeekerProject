<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Test;
use App\Question;
use App\Answer;
class TestController extends Controller
{
    public function index()
    {
        return view('user.TestBuilder');
    }

    public  function submit(Request $request){
//        $this->validate($request,[
//            'question'=>'required:questions',
//            'answer'=>'required:answers'
//        ]);

        $validator = Validator::make($request->all(), [
            'question' => 'required|max:255',
            'ans1' => 'required|max:255',
            'ans2' => 'required|max:255',
            'ans3' => 'required|max:255',
            'ans4' => 'required|max:255',
            'correct1'=>'required|boolean',
            'correct2'=>'required|boolean',
            'correct3'=>'required|boolean',
            'correct4'=>'required|boolean',
        ]);
        if ($validator->fails()){
            if($validator -> errors() -> first('question') != [])
            {

            }
            if($validator -> errors() -> first('ans1') != [])
            {

            }
            if($validator -> errors() -> first('ans2') != [])
            {

            }
            if($validator -> errors() -> first('ans3') != [])
            {

            }
            if($validator -> errors() -> first('ans4') != [])
            {

            }
            if($validator -> errors() -> first('correct1') != [])
            {

            }
            if($validator -> errors() -> first('correct2') != [])
            {

            }
            if($validator -> errors() -> first('correct3') != [])
            {

            }
            if($validator -> errors() -> first('correct4') != [])
            {

            }
        }
        else
        {
            $new_test = new Test;
            $new_test -> post_id = $post_id;
        }
    }
}
