<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\TestQuestion;
use Faker\Generator as Faker;

$factory->define(\App\TestQuestion::class, function (Faker $faker) {
    $testids = DB::table('tests') ->pluck('id')->toArray();
    return [
        'que_desc'=>$faker->text(),
        'ans1'=>$faker->text(100),
        'ans2'=>$faker->text(100),
        'ans3'=>$faker->text(100),
        'ans4'=>$faker->text(100),
        'true_ans'=>$faker->randomDigit($min = 1 ,$max = 4),
        'test_id'=>$testids[array_rand($testids)]
    ];
});
