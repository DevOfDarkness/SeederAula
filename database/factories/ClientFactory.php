<?php

use Faker\Generator as Faker;

$factory->define(App\Client::class, function (Faker $faker) {

    $room_id = App\Room::all()->pluck('id')->random();
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'room_id' => $room_id
    ];
});
