<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Entity;
use App\Line;
use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(Line::class, function (Faker $faker) {
    $objet = Entity::find(1)->objets->where('type_id', 2)->random();
    $start = Carbon::parse($faker->dateTimeBetween('-6 months', 'now'));
    // $end = Carbon::parse($faker->dateTimeBetween($start, 'now'));
    $end = Carbon::parse($faker->dateTimeBetween($start, $start->copy()->addMonth(1)));
    return [
        'start_time' => $start,
        // 'end_time' => $faker->randomElement([$end, NULL]),
        'end_time' => $end,
        'comment' => $faker->sentence,
        'type' => 'corr',
        'entity_id' => 1,
        'user_id' => Entity::find(1)->users->random()->id,
        'objet_id' => $objet->id,
        'subobjet_id' => $objet->subobjets->random()->id,
        'duration' => $start->diffInMinutes($end)
    ];
});
