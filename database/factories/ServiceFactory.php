<?php

use Faker\Generator as Faker;
use App\Service;

$factory->define(Service::class, function (Faker $faker) {
    return [
        'icone' => null,
        'titulo' => null,
        'descricao' => null,
    ];
});
