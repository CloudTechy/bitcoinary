<?php

use App\Transaction;
use App\User;
use Faker\Generator as Faker;

$factory->define(Transaction::class, function (Faker $faker) {
	// $sent = $faker->boolean;
	// $confirmed = $faker->boolean;
	// if ($confirmed == true) {
	// 	$sent = true;
	// }
	$user =  User::inRandomOrder()->first();
	return [
		'user_id' => $user->id,
		'amount' => $faker->numberBetween($min = 50, $max = 200000),
		'sent' => true,
		'confirmed' => true,
		'reference' => 'SELF',
	];
});
