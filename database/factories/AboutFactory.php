<?php

use Faker\Generator as Faker;
use App\About;

$factory->define(About::class, function (Faker $faker) {
    return [
        'text_quem_somos' => null,
        'text_missoes' => null,
        'text_valores' => null,
    ];
});
