<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Tariff::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'is_enabled' => true,
    ];
});


$factory->state(\App\Models\Tariff::class, 'base', [
    'name' => 'Base',
    'max_daily_cost' => 200000,
]);


$factory->state(\App\Models\Tariff::class, 'premium', [
    'name' => 'Premium',
    'max_daily_cost' => 300000,
]);