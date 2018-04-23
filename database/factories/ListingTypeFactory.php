<?php

use Faker\Generator as Faker;

$factory->define(App\ListingType::class, function (Faker $faker) {
    return [
        'name' => substr($faker->sentence(2), 0, -1),
        'slug' => $faker->slug,
        'description' => $faker->paragraph,
    ];
});
