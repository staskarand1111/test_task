<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\StageTariff::class, function (Faker $faker) {
    return [

    ];
});



$factory->state(\App\Models\StageTariff::class, 'reservation', [
    'stage_type' => 'reservation',
    'price' => 200,
    'measure' => 'min',
    'params' => [
        'tariff_start' => '07:00',
        'tariff_end'   => '23:00'
    ]
]);

$factory->state(\App\Models\StageTariff::class, 'review', [
    'stage_type' => 'review',
    'price' => 700,
    'measure' => 'min',
    'params' => [
        'counting_after' => 7,
    ]
]);

$factory->state(\App\Models\StageTariff::class, 'parking', [
    'stage_type' => \App\Models\StageTariff::TYPE_PARKING,
    'price' => 200,
    'measure' => 'min',
]);

$factory->state(\App\Models\StageTariff::class, 'ride_tariff_by_time', [
    'stage_type' => \App\Models\StageTariff::TYPE_RIDE,
    'price' => 800,
    'measure' => 'min',
]);

$factory->state(\App\Models\StageTariff::class, 'ride_tariff_by_distance', [
    'stage_type' => \App\Models\StageTariff::TYPE_RIDE,
    'price' => 1000,
    'measure' => 'km',
    'params' => [
        'counting_after' => 70
    ]
]);