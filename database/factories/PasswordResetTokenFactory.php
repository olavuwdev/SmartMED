<?php

use Faker\Generator as Faker;
use App\PasswordResetToken;

$factory->define(PasswordResetToken::class, function (Faker $faker) {
    return [
        'email' => null,
        'token' => null,
        'created_at' => null,
    ];
});
