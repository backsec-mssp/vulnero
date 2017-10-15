<?php

use Faker\Generator as Faker;

$factory->define(App\AssetCategory::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(3),
    ];
});
