<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Entity;
use App\Event;
use Faker\Generator as Faker;

$factory->define(Event::class, function (Faker $faker) {
    $objet = Entity::find(1)->objets->where('type_id', 1)->random();
    return [
        'time' => $faker->dateTimeBetween('-2 months', 'now'),
        'event' => $faker->paragraph,
        'type' => 'corr',
        'entity_id' => 1,
        'user_id' => Entity::find(1)->users->random()->id,
        'objet_id' => $objet->id,
        'subobjet_id' => $objet->subobjets->random()->id,
        'extra' => $faker->randomElement([$faker->colorName, ''])
    ];
});
