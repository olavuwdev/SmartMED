<?php

use Faker\Generator as Faker;
use App\FailedJob;

$factory->define(FailedJob::class, function (Faker $faker) {
    return [
        'uuid' => null,
        'connection' => null,
        'queue' => null,
        'payload' => null,
        'exception' => null,
        'failed_at' => null,
    ];
});
