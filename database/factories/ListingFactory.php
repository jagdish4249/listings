<?php

use App\Listing;
use Faker\Generator as Faker;



$factory->define(Listing::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'gender' =>$faker->randomElement(['male','female']) ,
        'phone' =>$faker->unique()->phoneNumber,
        'email' => $faker->unique()->safeEmail,
        'address'=> $faker->address,
        'nationality'=>$faker->country,
        'dob'=>$faker->dateTimeAD,
        'education_background'=>$faker->randomElement(['engineering','it','science','management']),
        'preferred_mode'=>$faker->randomElement(['phone','email','none']),

    ];
});
