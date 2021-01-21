<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;
use App\Transaction;
use App\Package;
use Carbon\Carbon;

$factory->define(App\PackageUser::class, function (Faker $faker) {

	$trx = Transaction::inRandomOrder()->first();
	$amount = $trx->amount;
	$package = Package::whereRaw('? >= min_deposit  and ? <= max_deposit',[$amount,$amount])->firstOrFail();
	return [
		'transaction_id' => $trx->id, 
		'package_id' => $package->id, 
		'user_id' => $trx->user_id, 
		'amount' => $amount, 
		'expiration' => Carbon::now()->addDays($package->turnover),
	];
});
