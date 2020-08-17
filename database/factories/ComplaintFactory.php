<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(ComplaintType::class, function (Faker $faker) {
    return [
        'category' => $faker->category
    ];
});
