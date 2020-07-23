<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(\App\Post::class, function (Faker $faker) {

    $userids = DB::table('Users')->pluck('id')->toArray();
    $catids = DB::table('categories')->pluck('id')->toArray();
    $langids=DB::table('languages')->pluck('id')->toArray();
    return [
        'user_id'=>$userids[array_rand($userids)],
        'job_title'=>$faker->text(50),
        'category_id'=>$catids[array_rand($catids)],
        'experience'=>$faker->text(50),
        'career_level'=>$faker->numberBetween($min = 1, $max = 3),
        'jobtype'=>$faker->numberBetween($min = 1, $max = 3),
        'type'=>$faker->text(50),
       // 'language_id'=>$langids[array_rand($langids)],
        'min_salary'=>$faker->randomFloat(6,0,99999),
        'max_salary'=>$faker->randomFloat(6,0,99999),
        'vacancies'=>$faker->numberBetween($min = 1, $max = 4),
        'age'=>$faker->randomFloat(6,0,99999),
        'other'=>$faker->text(),
        'expiration_date'=>$faker->date(),
//        'hastest'=>$faker->numberBetween($min = 1, $max = 4),
        'time_start_at'=>$faker->randomFloat(6,0,99999),
        'time_end_at'=>$faker->randomFloat(6,0,99999),
        'date_start_at'=>$faker->date(),
        'date_end_at'=>$faker->date(),
        'city'=>$faker->text(),
        'published'=>$faker->boolean,

    ];
});
