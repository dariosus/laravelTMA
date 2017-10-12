<?php

use Faker\Generator as Faker;

$factory->define(App\Director::class, function (Faker $faker) {
    return [
        "first_name" => $faker->name,
        "last_name" => $faker->lastName,
        "active" => $faker->numberBetween(0,1),
        "birth" => $faker->dateTime(),
        "rating" => $faker->numberBetween(0,10)
    ];
});
