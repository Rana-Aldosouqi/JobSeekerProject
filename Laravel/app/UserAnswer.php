<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAnswer extends Model
{
    protected $guarded=[];
    public $table="user_answers";

    public function user(){
        return $this->belongsTo('App\User','user_id');
    }
    public function test(){
        return $this->belongsTo('App\Test','test_id');
    }
    public function results(){
        return $this->hasMany('App\UserResult','answer_id');
    }
}
