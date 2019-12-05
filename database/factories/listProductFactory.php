<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\listProduct;
use Faker\Generator as Faker;

$factory->define(listProduct::class, function (Faker $faker) {

    return [
        'Nombre' => $faker->word,
        'Precio' => $faker->word,
        'Imagen' => $faker->word,
        'Stock' => $faker->randomDigitNotNull,
        'Descripcion' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
