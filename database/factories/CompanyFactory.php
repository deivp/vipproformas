<?php

use Faker\Generator as Faker;

$factory->define(App\company::class, function (Faker $faker) {
    return [
    	'user_id'=>$faker->numberBetween($min = 3, $max = 12),
        'name_company'=>$faker->sentence(3,false),
        'company_age'=>$faker->randomDigitNotNull,
        'profession'=>$faker->sentence(3,false),
        'description'=>$faker->text($maxNbChars = 150),
        'employees'=>$faker->randomDigitNotNull
    ];
});
