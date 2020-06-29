<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    public $table="users";


    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
//    protected $fillable = ['color'];

    public function image()
    {
        return $this->belongsTo(Image::class,'image_id','id');
    }
    public function gender()
    {
        return $this->belongsTo(Gender::class,'gender_id','id');
    }
    public function courses()
    {
        return $this->hasMany(Course::class,'user_id','id');
    }
    public function certificates()
    {
        return $this->hasMany(Certificate::class,'user_id','id');
    }
    public function education()
    {
        return $this->hasMany(Education::class,'user_id','id');
    }
    public function experiences()
    {
        return $this->hasMany(Experience::class,'user_id','id');
    }
    public function posts()
    {
        return $this->hasMany(Post::class,'user_id','id');
    }
    public function post_applieds()
    {
        return $this->hasMany(PostApplied::class,'user_id','id');
    }
    public function payments()
    {
        return $this->hasMany(Payment::class,'user_id','id');
    }
    public function test_results()
    {
        return $this->hasMany(UserResult::class,'user_id','id');
    }
    public function user_ans()
    {
        return $this->hasMany(UserAnswer::class,'user_id','id');
    }
    public function skills()
    {
        return $this->hasMany(Skill::class,'user_id','id');
    }
    public function reports()
    {
        return $this->hasMany(Report::class,'user_id','id');
    }
    public function passwordresets()
    {
        return $this->hasMany(PasswordReset::class,'user_id','id');
    }

    //Mohamed
    public function answers(){
        return $this->hasMany('App\UserAnswer','user_id');
    }
}

