<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Submit;
use Faker\Generator as Faker;

$factory->define(Submit::class, function (Faker $faker) {
    $answerIds = DB::table('answers') ->pluck('id')->toArray();
    $userIds = DB::table('Users')->pluck('id')->toArray();
    return [
        'answer_id'=>$answerIds[array_rand($answerIds)],
        'user_id'=>$userIds[array_rand($userIds)]

    ];
});
