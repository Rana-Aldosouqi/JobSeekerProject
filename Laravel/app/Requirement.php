<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requirement extends Model
{
    public $table="requirements";
    public function post()
    {
        return $this->belongsTo(Post::class,'post_id','id');
    }
}
