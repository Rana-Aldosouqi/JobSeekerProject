<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Image::class, function (Faker $faker) {
    return [
        'name'=>$faker->text(125),
        'path'=>$faker->text(125),
        'size'=>$faker->randomFloat($nbMaxDecimals = 10.0, $min = 2.0, $max = 10.0),
        'extension'=>$faker->randomFloat(6,0,99999)
    ];
});
