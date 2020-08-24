<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Paciente;
use Faker\Generator as Faker;

$factory->define(Paciente::class, function (Faker $faker) {
    return [
        'Nome' => $faker->name,
        'Cpf' => 123,
        'Rg' => 456,
    ];
});
