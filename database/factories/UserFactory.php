<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each off the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,
        'apellido' => $faker->name,
        'cedula' => $faker->ean13(),
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'contacto' => $faker->ean8(),
        'programa' => $faker->sentence(1,true),
        'usuario' => $faker->name,
        'password' => bcrypt(1234), // password
        'edad' => $faker->numberBetween(0,100),
        'rol' => $faker->numberBetween(1,2),
        'imagen' => "./imagenes_usuarios/usuario.png",
        'texto_quiensoy' => "Aqui debes poner tu descripcion",
        'nombre_empresa' => "USC",
        'instagram' => "#",
        'facebook' => "#",
        'git' => "#",
        'remember_token' => Str::random(10),
        
    ];
});
