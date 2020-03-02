<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Report;
use Faker\Generator as Faker;

$factory->define(\App\Report::class, function (Faker $faker) {

    $userIDs=\App\User::pluck('id')->toArray();
    $randIndex= array_rand($userIDs);

    return [
        'user_id'=>$userIDs[$randIndex],
        'reports' => $faker ->text,
    ];
});
