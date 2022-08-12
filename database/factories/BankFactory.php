<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Bank;
use Faker\Generator as Faker;

$factory->define(Bank::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->randomElement($array = array('First', 'Access', 'GTB', 'Diamond', 'Polaris', 'UBA', 'Zenith', 'Fidelity')),
    ];
});
