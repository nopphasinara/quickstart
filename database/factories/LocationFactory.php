<?php

use Faker\Generator as Faker;

$factory->define(App\Location::class, function (Faker $faker) {
    $name = $faker->state;
    $slug = str_slug($name);

    return [
        'name' => $name,
        'slug' => $slug,
        'image' => $faker->image(public_path('uploads/locations/'), $width = 300, $height = 300, $category = 'city', $fullPath = false, $randomize = true, $word = null),
        'description' => $faker->paragraph,
    ];
});
