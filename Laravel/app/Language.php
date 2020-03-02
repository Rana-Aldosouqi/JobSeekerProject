<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
   public function post(){
        return $this->belongsTo(Post::class,'post_id','id');
    }
}
