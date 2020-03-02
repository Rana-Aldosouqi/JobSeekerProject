<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Certificate::class, function (Faker $faker) {


    $userIDs=\App\User::pluck('id')->toArray();
    $randIndex= array_rand($userIDs);

    return [
        'user_id'=>$userIDs[$randIndex],
        'name'=>$faker->text(30),
        'file_path'=>$faker->text(120),
        'file_extension'=>$faker->randomFloat(6,0,99999),
        'size'=>$faker->randomFloat($nbMaxDecimals = 10.0, $min = 2.0, $max = 10.0)
    ];
});
