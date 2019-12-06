<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Enclosure;
use App\Animal;
use Faker\Generator as Faker;

$factory->define(Animal::class, function (Faker $faker) {
    return [
        
        'name' => $faker->firstName(),
        'weight' => $faker->randomFloat(2,300,500),

        'enclosure_id' => rand(1,App\Enclosure::get()->count()),
    ];
});
