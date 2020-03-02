<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function languages(){
        return $this->hasMany(Language::class,'post_id','id');
    }

    public function category(){
        return $this->belongsTo(Category::class,'category_id','id');
    }
}
