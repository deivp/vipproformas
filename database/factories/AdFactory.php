<?php

use Faker\Generator as Faker;

$factory->define(App\ad::class, function (Faker $faker) {
    return [
        
        'title'=>$faker->sentence(3,false),
        'description'=>$faker->text(100),
        'price'=>$faker->numberBetween($min = 1000, $max = 29000),
    ];
});
