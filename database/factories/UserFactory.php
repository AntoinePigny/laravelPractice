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
    static $password;

    return [
        'firstname' => $faker->firstName(),
        'lastname' => $faker->lastName(),
        'email' => $faker->unique()->safeEmail,
	    'status' => $faker->numberBetween(1, 4),
	    'created_at' => $faker->dateTimeBetween('2014-05-11', '2016-04-08'),
	    'updated_at' => $faker->dateTimeBetween('2016-04-08', '2017-01-01'),
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});
