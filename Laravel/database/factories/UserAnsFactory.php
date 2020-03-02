<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\UserAns;
use Faker\Generator as Faker;

$factory->define(\App\UserAns::class, function (Faker $faker) {
    $testids = DB::table('tests') ->pluck('id')->toArray();
    $userids = DB::table('Users')->pluck('id')->toArray();
    return [
    
        'test_id'=>$testids[array_rand($testids)],
        'user_id'=>$userids[array_rand($userids)],
        'que_desc'=>$faker->text(),
        'ans1'=>$faker->text(100),
        'ans2'=>$faker->text(100),
        'ans3'=>$faker->text(100),
        'ans4'=>$faker->text(100),
        'true_ans'=>$faker->randomDigit($min = 1 ,$max = 4),
        'your_ans'=>$faker->randomDigit($min = 1 ,$max = 4)
    ];
});
