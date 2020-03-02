<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Requirment;
use Faker\Generator as Faker;

$factory->define(\App\Language::class, function (Faker $faker) {

    $postids=DB::table('posts')->pluck('id')->toArray();
    return [
        'language'=>$faker->numberBetween($min = 1, $max = 5),
        'post_id'=>$postids[array_rand($postids)],
    ];
});
