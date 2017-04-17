<?php

$factory->define(pjm\Contact::class, function (Faker\Generator $faker) {

    return [
        "client_id" => $faker->randomDigitNotNull,
        "name" => $faker->name,
        "email" => $faker->email,
        "phone" => $faker->phoneNumber,
    ];
});