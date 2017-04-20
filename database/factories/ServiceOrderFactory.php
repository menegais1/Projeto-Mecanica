<?php


$factory->define(mecanica\ServiceOrder::class,function(Faker\Generator $faker){

    return [
      "client_id" => $faker->randomDigitNotNull,
        "vehicle_id" =>$faker->randomDigitNotNull,
        "user_id"=>$faker->randomDigitNotNull,
        "start_date"=>$faker->dateTime,
        "end_date"=>$faker->dateTime,
        "service_description"=>$faker->sentences(3,true),
        "amount"=>$faker->randomFloat(2,0,999999),
        "notes"=>$faker->sentence(6,true),
    ];
});