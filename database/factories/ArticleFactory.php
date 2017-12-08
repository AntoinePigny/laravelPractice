<?php

use Faker\Generator as Faker;

$factory->define(App\Article::class, function (Faker $faker) {
    return [
	    'title' => $faker->firstName(),
	    'content' => $faker->lastName(),
	    'status' => $faker->numberBetween(1, 4),
	    'users_id' => $faker->numberBetween(1, 100),
	    'categories_id' => $faker->numberBetween(1, 20),
	    'created_at' => $faker->dateTimeBetween('2014-05-11', '2016-04-08'),
	    'updated_at' => $faker->dateTimeBetween('2017-01-02', '2017-11-30'),
	    'published_at' => $faker->dateTimeBetween('2016-04-08', '2017-01-01'),
    ];
});
