<?php

use Faker\Generator as Faker;

$factory->define(App\Asset::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(3),
        'asset_category_id' => factory(\App\AssetCategory::class)->create()->id,
    ];
});
