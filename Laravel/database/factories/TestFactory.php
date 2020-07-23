<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Test;
use Faker\Generator as Faker;

$factory->define(Test::class, function (Faker $faker) {
    $postids = DB::table('Posts')->pluck('id')->toArray();
    return [
        'post_id'=>$postids[array_rand($postids)],
    ];
});
