<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Duration;
use Faker\Generator as Faker;

$factory->define(Duration::class, function (Faker $faker) {
	$duration = $faker->unique()->randomElement([1,2,3]);
	$description = "";
	switch ($duration) {
		case 1:
			$description = '24Hrs';
			break;
		case 2:
			$description = '48Hrs';
			break;
		case 3:
			$description =  '3 Days';
			break;
	}

    return [
        'duration' => $duration,
        'description' => $description,
    ];
});
