<?php

use Faker\Generator as Faker;

$factory->define(App\Location::class, function (Faker $faker) {
    $name = $faker->state;
    $slug = str_slug($name);

    return [
        'name' => $faker->state,
        'slug' => $faker->slug,
        'image' => $faker->image(public_path('uploads/locations/'), $width = 320, $height = 282, $category = 'city', $fullPath = false, $word = null),
        'description' => $faker->paragraph,
    ];
});
