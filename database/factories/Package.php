<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Package;
use App\Portfolio;
use Faker\Generator as Faker;

$factory->define(Package::class, function (Faker $faker) {
	$name = $faker->unique()->randomElement(['Bronze', 'Silver', 'Gold', 'Premium']);
	$plan = [];
	if($name == "Bronze"){
		$plan['name'] = "Bronze";
		$plan['roi'] = 20;
		$plan['min_deposit'] = 50;
		$plan['max_deposit'] = 499;
		$plan['turnover'] = 1;
		$plan['loop_termination'] = 6;
		$plan['first_level_ref_commission'] = 7;
		$plan['second_level_ref_commission'] = 5;
	}
	else  if($name == "Silver"){
		$plan['name'] = "Silver";
		$plan['roi'] = 20;
		$plan['min_deposit'] = 1000;
		$plan['max_deposit'] = 4999;
		$plan['turnover'] = 1;
		$plan['loop_termination'] = 6;
		$plan['first_level_ref_commission'] = 10;
		$plan['second_level_ref_commission'] = 5;
	}
	else  if($name == "Gold"){
		$plan['name'] = "Gold";
		$plan['roi'] = 50;
		$plan['min_deposit'] = 5000;
		$plan['max_deposit'] = 30000;
		$plan['turnover'] = 2;
		$plan['loop_termination'] = 3;
		$plan['first_level_ref_commission'] = 10;
		$plan['second_level_ref_commission'] = 5;
	}
	else  if($name == "Premium"){
		$plan['name'] = "Premium";
		$plan['roi'] = 100;
		$plan['min_deposit'] = 31000;
		$plan['max_deposit'] = 200000;
		$plan['turnover'] = 3;
		$plan['loop_termination'] = 2;
		$plan['first_level_ref_commission'] = 10;
		$plan['second_level_ref_commission'] = 5;
	}
	return [
		'name' => $plan['name'],
		'roi' => $plan['roi'],
		'min_deposit' => $plan['min_deposit'],
		'max_deposit' => $plan['max_deposit'],
		'turnover' => $plan['turnover'],
		'loop_termination' => $plan['loop_termination'],
		'first_level_ref_commission' => $plan['first_level_ref_commission'],
		'second_level_ref_commission' => $plan['second_level_ref_commission'],

	];
});
