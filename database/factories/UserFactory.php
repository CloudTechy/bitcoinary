<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\User;
use Faker\Generator as Faker;
/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
 */
class UserFactory extends Factory
{
	// protected $model = User::class;	
	public function definition() {
		return [
			'first_name' =>  $this->faker->firstName,
			'last_name' =>  $this->faker->lastName,
			'username' =>  $this->faker->firstName. $this->faker->lastName,
			'wallet' =>  $this->faker->creditCardNumber,
			'email' =>  $this->faker->unique()->safeEmail,
			'user_level_id' =>  $this->faker->numberBetween(1, 2),
			'email_verified_at' => now(),
			'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
			'remember_token' => Str::random(10),
			'api_token' =>  $this->faker->unique()->bothify('#???##?#?#??#?##?#???#?#??#?#??#?#?#??#?##?#??#?#??#?###??##'),

		];
	}
}
