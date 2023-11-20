<?php

use Faker\Generator as Faker;
use App\Specialist;

$factory->define(Specialist::class, function (Faker $faker) {
    return [
        'nome' => null,
        'especialidade' => null,
        'descricao_especialista' => null,
        'foto_especialista' => null,
        'id_tipo' => null,
    ];
});
