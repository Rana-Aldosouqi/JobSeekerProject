<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Test;
use Faker\Generator as Faker;

$factory->define(\App\Test::class, function (Faker $faker) {

    $postIDs=\App\User::pluck('id')->toArray();
    $randIndex= array_rand($postIDs);

    return [
        'post_id'=>$postIDs[$randIndex],
        'test_name'=>$faker->text(50)
    ];
});
