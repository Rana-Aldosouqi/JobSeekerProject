<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\TestResulte;
use Faker\Generator as Faker;

$factory->define(\App\TestResult::class, function (Faker $faker) {


    $testids = DB::table('tests') ->pluck('id')->toArray();
    $userids = DB::table('Users')->pluck('id')->toArray();

    return [
        'test_id'=>$testids[array_rand($testids)],
        'user_id'=>$userids[array_rand($userids)],

        'score'=>$faker->randomFloat(3,$min=0, $max=100),

    ];
});
