<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Newsletter;
use Faker\Generator as Faker;

$factory->define(Newsletter::class, function (Faker $faker) {
    return [
        'email' => $faker->safeEmail,
    ];
});
