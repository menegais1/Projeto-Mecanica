<?php

$factory->define(pjm\Client::class, function (Faker\Generator $faker) {

    return [
        "name" => $faker->name,
        "cpf" => $faker->randomNumber(5, true),
        "status" => $faker->boolean,
    ];
});