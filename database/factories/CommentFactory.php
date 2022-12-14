<?php

use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
        'nama' => $faker->name(),
        'komentar' => $faker->sentence($nbWords = 8, $variableNbWords = true),
    ];
});
