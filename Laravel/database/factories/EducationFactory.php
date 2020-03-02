<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Education::class, function (Faker $faker) {

    $userIDs=\App\User::pluck('id')->toArray();
    $randIndex= array_rand($userIDs);

    return [
        'user_id'=>$userIDs[$randIndex],
        'degree'=>$faker->text(30),
        'school'=>$faker->text(50),
        'start_date'=>$faker->dateTime($max = 'now', $timezone = null),
        'end_date'=>$faker->dateTime($max = 'now', $timezone = null),
        'file_path'=>$faker->text(100),
        'file_extension'=>$faker->randomFloat(6,0,99999),
        'size'=>$faker->randomFloat($nbMaxDecimals = 10.0, $min = 2.0, $max = 10.0)
    ];
});
