<?php

use Faker\Generator as Faker;
use App\Migration;

$factory->define(Migration::class, function (Faker $faker) {
    return [
        'migration' => null,
        'batch' => null,
    ];
});
