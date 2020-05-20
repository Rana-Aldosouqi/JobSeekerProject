<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Answer;
use Faker\Generator as Faker;

$factory->define(\App\Answer::class, function (Faker $faker) {
    $questionIds = DB::table('tests') ->pluck('id')->toArray();
//    $userids = DB::table('Users')->pluck('id')->toArray();
    return [

        'question_id'=>$questionIds[array_rand($questionIds)],

        'question'=>$faker->text(),
        'correct'=>$faker->boolean

//        'user_id'=>$userids[array_rand($userids)],
//        'ans1'=>$faker->text(100),
//        'ans2'=>$faker->text(100),
//        'ans3'=>$faker->text(100),
//        'ans4'=>$faker->text(100),
//        'true_ans'=>$faker->randomDigit($min = 1 ,$max = 4),
//        'your_ans'=>$faker->randomDigit($min = 1 ,$max = 4)
    ];
});
