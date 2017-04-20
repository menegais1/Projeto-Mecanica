<?php

$factory->define(mecanica\Vehicle::class, function (Faker\Generator $faker) {

    return [
        "client_id" => $faker->randomDigitNotNull(),
        "plate" => $faker->bothify('???-####'),
        "brand" => $faker->word,
        "year" => $faker->randomNumber(4, true),


    ];
});