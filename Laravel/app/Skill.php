<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    public $table="skills";
    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
    public $fillable = ['skill'];
}
