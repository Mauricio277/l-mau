<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Persona;
use Faker\Generator as Faker;

$factory->define(Persona::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'mail' => $faker->unique()->safeEmail,
        'sueldo' => $faker->numerify('####.##'),
    ];
});
