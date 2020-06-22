<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\feedback;
use Faker\Generator as Faker;

$factory->define(\App\Feedback::class, function (Faker $faker) {

    $userIDs=\App\User::pluck('id')->toArray();
    $randIndex= array_rand($userIDs);

    return [
        'user_id'=>$userIDs[$randIndex],
        'name' => $faker ->text(50),
        'email' => $faker ->email,
        'message' => $faker ->text,
    ];
});
