<?php

use Faker\Generator as Faker;
use App\PersonalAccessToken;

$factory->define(PersonalAccessToken::class, function (Faker $faker) {
    return [
        'tokenable_type' => null,
        'tokenable_id' => null,
        'name' => null,
        'token' => null,
        'abilities' => null,
        'last_used_at' => null,
        'expires_at' => null,
        'created_at' => null,
        'updated_at' => null,
    ];
});
