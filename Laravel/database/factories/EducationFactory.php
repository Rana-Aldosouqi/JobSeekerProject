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
        'start_date'=>$faker->date(),
        'end_date'=>$faker->date()
    ];
});
