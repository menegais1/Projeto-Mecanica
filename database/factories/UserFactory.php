<?php

$factory->define(pjm\User::class, function(Faker\Generator $faker){

    return [
            "name"=>$faker->name,
            "login"=>$faker->userName,
            "password"=>$faker->password,
            "status"=>$faker->boolean,
    ];
});