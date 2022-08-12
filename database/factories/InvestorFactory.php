<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Investor;
use Faker\Generator as Faker;

$factory->define(Investor::class, function (Faker $faker) {
	$investor['name'] = $faker->unique()->randomElement(['Fahad Bin Faiz','Danial K.','Lew Son','Tend z Joe', 'Sam Joe', 'Alex Joe', 'Juna Sun', 'Prof ed Laun']);
	if($investor['name']  == 'Fahad Bin Faiz'){
		$investor['investment']  = 1500355;
		$investor['image']  = '1.jpg';
	}
	else if($investor['name']  == 'Danial K.'){
		$investor['investment']  = 1500355;
		$investor['image']  = '2.jpg';
	}
	else if($investor['name']  == 'Lew Son'){
		$investor['investment']  = 1500355;
		$investor['image']  = '3.jpg';
	}
	else if($investor['name']  == 'Tend z Joe'){
		$investor['investment']  = 1500355;
		$investor['image']  = '4.jpg';
	}
	else if($investor['name']  == 'Sam Joe'){
		$investor['investment']  = 1500355;
		$investor['image']  = '5.jpg';
	}

	else if($investor['name']  == 'Alex Joe'){
		$investor['investment']  = 1500355;
		$investor['image']  = '6.jpg';
	}
	else if($investor['name']  == 'Juna Sun'){
		$investor['investment']  = 1500355;
		$investor['image']  = '7.jpg';
	}
	else if($investor['name']  == 'Prof ed Laun'){
		$investor['investment']  = 1500355;
		$investor['image']  = '8.jpg';
	}
    return [
        'name' => $investor['name'],
        'investment' => $investor['investment'],
        'image' => $investor['image'],
    ];
});
