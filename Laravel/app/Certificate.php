<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    public $table="certificates";

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
