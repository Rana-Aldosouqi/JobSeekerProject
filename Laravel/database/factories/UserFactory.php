<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\User::class, function (Faker $faker) {

    $imageIDs=\App\Image::pluck('id')->toArray();
    $randIndex= array_rand($imageIDs);

    $genderIDs=\App\Gender::pluck('id')->toArray();
    $randIndex1= array_rand($genderIDs);

    return [
        'image_id'=>$imageIDs[$randIndex],
        'gender_id'=>$genderIDs[$randIndex1],
        'first_name'=>$faker->name,
        'last_name'=>$faker->lastName,
        'username'=>$faker->userName,
        'email'=>$faker->unique()->safeEmail,
        'password'=>bcrypt('password'),
        'birth_date'=>$faker->date(),
        'is_admin'=>$faker->boolean,
        'user_type'=>$faker->text(7),
        'color'=>$faker->hexcolor,
        'phone_number'=>$faker->e164PhoneNumber,
        'military_service'=>$faker->text(8),
        'serve_time'=>$faker->date(),
        'facebook_url'=>$faker->url,
        'twitter_url'=>$faker->url,
        'ask_url'=>$faker->url,
        'linkedin_url'=>$faker->url,
        'Latitude'=>$faker->longitude,
        'longitude'=>$faker->latitude,
        'description'=>$faker->text(100),
        'rating'=>$faker->randomDigit

    ];
});
