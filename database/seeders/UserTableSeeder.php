<?php

namespace Database\Seeders;

use App\BankDetail;
use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {

		User::factory()->count(10)->create()->each(function ($user) {

			BankDetail::factory()->create(['user_id' => $user->id]);

		});
	}
}
