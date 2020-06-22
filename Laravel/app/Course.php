<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public $table="courses";

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
