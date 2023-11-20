<?php

use Faker\Generator as Faker;
use App\Channel;

$factory->define(Channel::class, function (Faker $faker) {
    return [
        'titulo' => null,
        'url' => null,
        'foto' => null,
    ];
});
