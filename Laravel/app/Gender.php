<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    public $table="genders";
    protected $fillable =['name'];

    public function users()
    {
        return $this->hasMany(User::class,'gender_id','id');
    }
}
