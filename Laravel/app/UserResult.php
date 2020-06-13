<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserResult extends Model
{
    protected $guarded=[];

    public $table="user_results";

    public function answer(){
        return $this->belongsTo('App\UserAnswer','answer_id');
    }
}
