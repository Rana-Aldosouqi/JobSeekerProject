<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Course::class, function (Faker $faker) {

    $userIDs=\App\User::pluck('id')->toArray();
    $randIndex= array_rand($userIDs);

    return [
        'user_id'=>$userIDs[$randIndex],
        'course'=>$faker->text(30),
        'start_date'=>$faker->date(),
        'end_date'=>$faker->date(),
        'specialization'=>$faker->text(50),
        'course_level'=>$faker->text(20),
        'language'=>$faker->text(30),
        'salary'=>$faker->ean8,
        'time'=>$faker->ean8,
        'phone'=>$faker->e164PhoneNumber,
    ];
});
