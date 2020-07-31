<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(OpinionType::class, function (Faker $faker) {
    return [
        'category' => $faker->category
    ];
});
