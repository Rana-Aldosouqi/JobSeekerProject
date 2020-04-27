<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function users()
    {
        return $this->hasMany(User::class,'image_id','id');
    }

    public function posts()
    {
        return $this->hasMany(Post::class,'image_id','id');

    }
}
