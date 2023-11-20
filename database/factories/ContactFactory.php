<?php

use Faker\Generator as Faker;
use App\Contact;

$factory->define(Contact::class, function (Faker $faker) {
    return [
        'dias' => null,
        'numero' => null,
        'email' => null,
        'twitter' => null,
        'instagram' => null,
        'facebook' => null,
        'youtube' => null,
        'telegram' => null,
    ];
});
