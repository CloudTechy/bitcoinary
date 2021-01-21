<?php

use Illuminate\Database\Seeder;

class PackageUserTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		factory(App\PackageUser::class, 100)->create();
	}
}
