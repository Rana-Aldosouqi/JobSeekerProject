<?php

namespace App\Http\Controllers;

use App\Test;
use App\TestQuestion;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index($id){
        return view('test.index')->with('post_id',$id);
    }
    public function store(){
        $validate = request()->validate([
            '_postID'=>'required',
            'testName'=>'required',
            'question'=>'required',
            'Ans1'=>'required',
            'Ans2'=>'required',
            'Ans3'=>'required',
            'Ans4'=>'required',
            'correct1'=>'',
            'correct2'=>'',
            'correct3'=>'',
            'correct4'=>''
        ]);

        $test = Test::create(['post_id'=>$validate['_postID'],'name'=>$validate['testName']]);
        foreach($validate['question'] as $index=>$value){
            $correct1 = array_key_exists('correct1',$validate)?(array_key_exists($index,$validate['correct1'])?$validate['correct1'][$index]:0):0;
            $correct2 = array_key_exists('correct2',$validate)?(array_key_exists($index,$validate['correct2'])?$validate['correct2'][$index]:0):0;
            $correct3 = array_key_exists('correct3',$validate)?(array_key_exists($index,$validate['correct3'])?$validate['correct3'][$index]:0):0;
            $correct4 = array_key_exists('correct4',$validate)?(array_key_exists($index,$validate['correct4'])?$validate['correct4'][$index]:0):0;
            $correct1 = strcmp($correct1,'on')==0?1:0;
            $correct2 = strcmp($correct2,'on')==0?1:0;
            $correct3 = strcmp($correct3,'on')==0?1:0;
            $correct4 = strcmp($correct4,'on')==0?1:0;

            $questionAnswers = [
                $validate['Ans1'][$index]  => $correct1,
                $validate['Ans2'][$index]  => $correct2,
                $validate['Ans3'][$index]  => $correct3,
                $validate['Ans4'][$index]  => $correct4
            ];
            TestQuestion::create([
                'test_id' => $test->id,

                'questionHeader' => $value,
                'answers'=> serialize($questionAnswers)
            ]);
        }
        return redirect('/Alljobs');

    }
}
