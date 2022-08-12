<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Testimonial;
use Faker\Generator as Faker;

$factory->define(Testimonial::class, function (Faker $faker) {
	$testimonial = [];
	$testimonial['name']  = $faker->unique()->randomElement(['Fahaddevs','Alina','Amir Khan','Zohir Khan']);
	if($testimonial['name'] == 'Fahaddevs' ){
		$testimonial['content'] = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos minus, assumenda soluta unde veritatis voluptatibus adipisci, aliquid, non officiis repudiandae rerum porro odio ea laborum veniam numquam doloribus obcaecati.';
		$testimonial['image'] = '1.jpg';
		$testimonial['designation'] = 'CEO';
		$testimonial['company'] = 'fahaddevs';
		$testimonial['rating'] = 5;
	}
	else if ($testimonial['name'] == 'Alina') {
		$testimonial['content'] = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos minus, assumenda soluta unde veritatis voluptatibus adipisci, aliquid, non officiis repudiandae rerum porro odio ea laborum veniam numquam doloribus obcaecati.';
		$testimonial['image'] = '2.jpg';
		$testimonial['designation'] = 'CTO';
		$testimonial['company'] = 'fahaddevs';
		$testimonial['rating'] = 5;
	}
	else if ($testimonial['name'] == 'Amir Khan') {
		$testimonial['content'] = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos minus, assumenda soluta unde veritatis voluptatibus adipisci, aliquid, non officiis repudiandae rerum porro odio ea laborum veniam numquam doloribus obcaecati.';
		$testimonial['image'] = '3.jpg';
		$testimonial['designation'] = 'COO';
		$testimonial['company'] = 'fahaddevs';
		$testimonial['rating'] = 5;
	}
	else if ($testimonial['name'] == 'Zohir Khan') {
		$testimonial['content'] = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos minus, assumenda soluta unde veritatis voluptatibus adipisci, aliquid, non officiis repudiandae rerum porro odio ea laborum veniam numquam doloribus obcaecati.';
		$testimonial['image'] = '4.jpg';
		$testimonial['designation'] = 'Manager';
		$testimonial['company'] = 'fahaddevs';
		$testimonial['rating'] = 5;
	}
    return [
        'name' => $testimonial['name'],
        'content' => $testimonial['content'],
        'image' => $testimonial['image'],
        'designation' => $testimonial['designation'],
        'company' => $testimonial['company'],
        'rating' => $testimonial['rating']
    ];
});
