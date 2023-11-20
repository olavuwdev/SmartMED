<?php

use Faker\Generator as Faker;
use App\SpecialtyType;

$factory->define(SpecialtyType::class, function (Faker $faker) {
    return [
        'titulo' => null,
    ];
});
