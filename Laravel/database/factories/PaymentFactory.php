<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Payment;
use Faker\Generator as Faker;

$factory->define(\App\Payment::class, function (Faker $faker) {
    
    $userids = DB::table('Users')->pluck('id')->toArray();
    $postappliedids = DB::table('post_applieds')->pluck('id')->toArray();
        
    
    
    return [
        'user_id'=>$userids[array_rand($userids)],
        'post_applied_id'=>$postappliedids[array_rand($postappliedids)],
        'method'=>$faker->text(100),
        'amount'=>$faker->randomFloat(6,0,99999),
        'payment_date'=>$faker->date(),
        
        
    ];
});
