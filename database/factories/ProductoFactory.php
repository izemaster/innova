<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Producto;
use Faker\Generator as Faker;

$factory->define(Producto::class, function (Faker $faker) {
    return [
        'nombre' => $faker->firstName(),
        'descripcion'  => $faker->text(40),
        'precio' => $faker->randomFloat(2,10,500),
        'categoria_id' => $faker->randomElement([1,2,3]),

    ];
});
