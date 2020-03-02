<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Gender::class, function (Faker $faker) {
    return [
        'name'=>$faker->unique()->text(6)
    ];
});
