<?php


namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Duration;
use Faker\Generator as Faker;

$factory->define(Duration::class, function (Faker $faker) {
	$duration = $faker->unique()->randomElement([1,2,3,0]);
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
		case 0:
			$description =  'Lifetime';
			break;
	}

    return [
        'duration' => $duration,
        'description' => $description,
    ];
});
