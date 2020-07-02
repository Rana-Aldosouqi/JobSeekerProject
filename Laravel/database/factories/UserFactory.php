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
        'age'=>$faker->randomDigit,
        'address'=>$faker->text(100),
        'is_admin'=>$faker->boolean,
        'user_type'=>$faker->randomElement(['']),
        'color'=>null,
        'phone_number'=>$faker->e164PhoneNumber,
        'last_activity'=>$faker->date(),
        'is_active'=>$faker->boolean,
        'military_service'=>$faker->text(8),
        'serve_time'=>$faker->date(),
        'facebook_url'=>$faker->url,
        'twitter_url'=>$faker->url,
        'ask_url'=>$faker->url,
        'linkedin_url'=>$faker->url,
        'Latitude'=>$faker->longitude,
        'longitude'=>$faker->latitude,
        'description'=>$faker->text(100),
        'rating'=>$faker->randomDigit,
        'work_field'=>$faker->text(30),
        'Work_Times'=>$faker->date(),
        'foundation_date'=>$faker->date(),
        'Hourly_Rate'=>$faker->date(),
        'Total_Projects'=>$faker->date(),
        'Availability'=>$faker->date(),
        'profession'=>$faker->text(100),
        'education'=>$faker->text(100),
        'is_banned'=>$faker->boolean,
    ];
});


