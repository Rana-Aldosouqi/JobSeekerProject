<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\feedback;
use Faker\Generator as Faker;

$factory->define(\App\Feedback::class, function (Faker $faker) {
    return [
        'name' => $faker ->text,
        'email' => $faker ->email,
        'message' => $faker ->text,
    ];
});
