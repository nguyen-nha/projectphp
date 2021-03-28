<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'ten' => $faker->unique()->safeten,
        'dotuoi' => $faker->dotuoi,
        'gioitinh' => $faker->gioitinh,
        'loai' => $faker->loai,
        'kichco' => $faker->kichco,
        'suckhoe' => $faker->suckhoe,
        
    ];
});
