<?php

namespace App\Http\Controllers;

use App\Test;
use App\UserAnswer;
use App\UserResult;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnswerController extends Controller
{
    private $i = 0;
    private function hasTaken($user,$testID){
        if(count($user->answers) != 0){
            $flag = false;
            $index = -1;
            foreach($user->answers as $i=>$ans){
                if($ans->test_id == $testID ){
                    $flag=true;
                    $this->i = $i;
                    $index = $ans->test_id;
                    break;
                }
            }
            if($flag && $testID == $index){
                return true;
            }

        }
        return false;
    }
    public function index($test_id){
        $test = Test::where('id',$test_id)->firstOrFail();
        $user = Auth::user();
        $percentage =-1;
        if(count($user->answers) != 0){
            if($this->hasTaken($user,$test->id)){
                $result= $user->answers[$this->i]->results->first()->result;
                $percentage = ($result / count($test->questions)) * 100;
                $percentage = round($percentage,2);
            }

        }
        return view('answer.index')->with('test',$test)->with('percent',$percentage);
    }

    public function store(){
        $validate = request()->validate([
            '_testID'=>'required',
        ]);
        $test = Test::where('id',$validate['_testID'])->firstOrFail();
        $user = Auth::user();
        if(!$this->hasTaken($user,$test->id)){
            $result = 0;
            $userAnswers = [];
            foreach($test->questions as $index => $q){
                $rightAnswers = $this->findAllOccur(unserialize($q->answers),1);
                if(array_key_exists('q'.($index+1),request()->all()))
                    $userAnswer = \request()->only('q'.($index+1))['q'.($index+1)];
                else
                    $userAnswer= [];
                $userAnswers['q'.($index+1)]= $userAnswer;
                if($this->compareAnswers($rightAnswers,$userAnswer)){
                    $result+=1;
                }
            }
            $answer = UserAnswer::create([
                'user_id'=>Auth::user()->id,
                'test_id'=>$test->id,
                'userAnswer'=>serialize($userAnswers)
            ]);
            UserResult::create([
                'answer_id'=>$answer->id,
                'result'=>$result
            ]);
        }else{

            $result= $user->answers[$this->i]->results->first()->result;
            $percentage = ($result / count($test->questions)) * 100;
            $percentage = round($percentage,2);
            return  redirect()->back()->withErrors('Exam has been taken already!  your result is: '.$percentage. ' %');
        }
        return redirect()->back();



    }
    private function findAllOccur($arr,$val){
        $toReturn = [];
        foreach($arr as $key=>$value){
            if($value == $val){
                array_push($toReturn,$key);
            }
        }
        return $toReturn;

    }
    private function compareAnswers($arr1,$arr2){
        if(count($arr1) != count($arr2))
            return false;
        foreach($arr1 as $index => $el){
            if($el != $arr2[$index]){
                return false;
            }
        }
        return true;
    }
}
