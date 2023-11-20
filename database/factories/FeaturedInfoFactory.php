<?php

use Faker\Generator as Faker;
use App\FeaturedInfo;

$factory->define(FeaturedInfo::class, function (Faker $faker) {
    return [
        'titulo' => null,
        'link' => null,
    ];
});
