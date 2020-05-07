<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function users()
    {
        return $this->hasMany(User::class,'image_id','id');
    }

//<<<<<<< HEAD
    public function posts()
    {
        return $this->hasMany(Post::class,'image_id','id');

    }
//=======
//>>>>>>> e86a55f20ea09e4b65f35c66709b52b16247071a
}
