<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Producto;
use Faker\Generator as Faker;

$factory->define(Producto::class, function (Faker $faker) {
    return [
        'id_perfil' => 1,
        'nombre_producto' => $faker->sentence(2,true),
        'imagen' =>'https://picsum.photos/200/300',
        'descripcion' => $faker->realText(200),
        'precio' => $faker->randomFloat(2, 10, 100),
        'fecha_publi' => date("Y-m-d"),
    ];
});
