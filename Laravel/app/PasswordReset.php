<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PasswordReset extends Model
{
    public $table="password_resets";

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
