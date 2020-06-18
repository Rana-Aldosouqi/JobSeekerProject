<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestQuestion extends Model
{
    public $table="questions";
    protected $guarded=[];
    public function test(){
        return $this->belongsTo('App\Test','test_id');
    }
}
