<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\PostApplied::class, function (Faker $faker) {

    $userids = DB::table('Users')->pluck('id')->toArray();
    $postids = DB::table('posts')->pluck('id')->toArray();
    return [
        'user_id'=>$userids[array_rand($userids)],
        'post_id'=>$postids[array_rand($postids)],

    ];
});
