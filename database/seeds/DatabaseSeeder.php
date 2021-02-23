<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run() {
		$this->call(UserLevelTableSeeder::class);
		$this->call(BankTableSeeder::class);
		$this->call(PaymentMethodSeeder::class);
		$this->call(UserTableSeeder::class);

		$this->call(TeamsSeeder::class);
		$this->call(NewsletterSeeder::class);
		
		$this->call(TestimonialsSeeder::class);
		$this->call(NewsSeeder::class);
		$this->call(DurationTableSeeder::class);

		//$this->call(PortfolioTableSeeder::class);
		$this->call(PackageTableSeeder::class);
		$this->call(TransactionTableSeeder::class);
		$this->call(PackageUserTableSeeder::class);
		$this->call(InvestorsSeeder::class);
		//$this->call(WithdrawalTableSeeder::class);
	}
}
