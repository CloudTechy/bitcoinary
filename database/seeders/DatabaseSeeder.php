<?php

use Illuminate\Database\Seeder;
use App\BankDetail;
use App\User;

class DatabaseSeeder extends Seeder {
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run() {
		User::factory()->count(20)->create()->each(function ($user) {

			BankDetail::factory()->create(['user_id' => $user->id]);

		});
	}
}
