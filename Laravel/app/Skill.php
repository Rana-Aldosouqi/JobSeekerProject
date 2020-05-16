<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
//    protected $fillable = ['name'];

//    public $table = "skills";
//    public $fillable = ['name'];
}
