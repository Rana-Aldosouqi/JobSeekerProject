<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    public $table="tests";
    protected $guarded=[];
    public function answers(){
        return $this->hasMany('App\UserAnswer','test_id');
    }
    public function post(){
        return $this->belongsTo('App\Post','post_id');
    }
    public function questions(){
        return $this->hasMany('App\TestQuestion','test_id');
    }
}
