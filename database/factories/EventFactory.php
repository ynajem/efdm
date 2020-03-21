<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Event;
use Faker\Generator as Faker;

$factory->define(Event::class, function (Faker $faker) {
    return [
        'user_id' => factory(\App\User::class),
        'date' => $faker->date,
        'time' => $faker->time,
        'type' => $faker->randomElement(['prev','corr','arch']),
        'object_id' => 1,
        'event' => $faker->paragraph
    ];
});
