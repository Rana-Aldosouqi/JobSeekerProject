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
        'job_title'=>$faker->text(),
        'category_id'=>$catids[array_rand($catids)],
        'experience'=>$faker->text(),
        'career_level'=>$faker->numberBetween($min = 1, $max = 3),
        'type'=>$faker->numberBetween($min = 1, $max = 3),
       // 'language_id'=>$langids[array_rand($langids)],
        'min_salary'=>$faker->randomFloat(6,0,99999),
        'max_salary'=>$faker->randomFloat(6,0,99999),
        'vacancies'=>$faker->numberBetween($min = 1, $max = 4),
        'min_age'=>$faker->randomDigit,
        'max_age'=>$faker->randomDigit,
        'other'=>$faker->text(),
        'expiration_date'=>$faker->date(),

    ];
});
