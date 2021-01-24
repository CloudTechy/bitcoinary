<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\News;
use Faker\Generator as Faker;

$factory->define(News::class, function (Faker $faker) {
	
    return [
        'author' => 'fahaddevs',
        'title' => 'Laboriosam distinctio nisi debitis deleniti voluptatum corporis.',
        'intro' => 'Lorem ipsum dolor sit amet, consectetur adipisic elit. Iusto eos rem ducimus nam! Optio, soluta. Laboriosam distinctio nisi debitis deleniti ducim.',
        'article' => 'Lorem ipsum dolor sit amet, consectetur adipisic elit. Iusto eos rem ducimus nam! Optio, soluta. Laboriosam distinctio nisi debitis deleniti ducim.Lorem ipsum dolor sit amet, consectetur adipisic elit. Iusto eos rem ducimus nam! Optio, soluta. Laboriosam distinctio nisi debitis deleniti ducim.Lorem ipsum dolor sit amet, consectetur adipisic elit. Iusto eos rem ducimus nam! Optio, soluta. Laboriosam distinctio nisi debitis deleniti ducim.Lorem ipsum dolor sit amet, consectetur adipisic elit. Iusto eos rem ducimus nam! Optio, soluta. Laboriosam distinctio nisi debitis deleniti ducim.Lorem ipsum dolor sit amet, consectetur adipisic elit. Iusto eos rem ducimus nam! Optio, soluta. Laboriosam distinctio nisi debitis deleniti ducim.',
        'votes' => $faker->randomDigit,
        'comment_disabled' => $faker->boolean,
        'image' => $faker->unique()->randomElement(['1.jpg','2.jpg','3.jpg']),
    ];
});
