<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\PaymentMethod;
use Faker\Generator as Faker;

$factory->define(PaymentMethod::class, function (Faker $faker) {
	$paymentMethod = $faker->unique()->randomElement(['Bitcoin','Ethereum','Tron','Perfect Money']);
	$show = $faker->randomElement(['withdrawal','deposit','both']);
    return [
        'name' => $paymentMethod,
        'show_on' => 'both',
        'type' => 'crypto',
        'image' => '1.jpg',
    ];
});
