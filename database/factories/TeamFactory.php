<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Team;
use Faker\Generator as Faker;

$factory->define(Team::class, function (Faker $faker) {
	$team = [];
	$team['name']  = $faker->unique()->randomElement(['Fahad Bin Faiz','Danial K.','Lew Son','Tend z Joe', 'Sam Joe', 'Alex Joe', 'Juna Sun', 'Prof ed Laun']);
	if($team['name']  == 'Fahad Bin Faiz'){
		$team['designation']  = 'CEO';
		$team['image']  = '1.jpg';
	}
	else if($team['name']  == 'Danial K.'){
		$team['designation']  = 'CTO';
		$team['image']  = '2.jpg';
	}
	else if($team['name']  == 'Lew Son'){
		$team['designation']  = 'Marketing Head';
		$team['image']  = '3.jpg';
	}
	else if($team['name']  == 'Tend z Joe'){
		$team['designation']  = 'Designer';
		$team['image']  = '4.jpg';
	}
	else if($team['name']  == 'Sam Joe'){
		$team['designation']  = 'Developer';
		$team['image']  = '5.jpg';
	}

	else if($team['name']  == 'Alex Joe'){
		$team['designation']  = 'UX Expert';
		$team['image']  = '6.jpg';
	}
	else if($team['name']  == 'Juna Sun'){
		$team['designation']  = 'SEO Expert';
		$team['image']  = '7.jpg';
	}
	else if($team['name']  == 'Prof ed Laun'){
		$team['designation']  = 'Manager';
		$team['image']  = '8.jpg';
	}
    return [
        'name' => $team['name'],
        'designation' => $team['designation'],
        'image' => $team['image'],
    ];
});
