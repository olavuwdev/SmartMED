<?php

use Faker\Generator as Faker;
use App\Post;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'titulo' => null,
        'texto' => null,
        'imagem' => null,
    ];
});
