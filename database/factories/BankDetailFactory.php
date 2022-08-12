<?php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Bank;
use App\BankDetail;
use App\User;
use App\PaymentMethod;

class BankDetailFactory extends Factory
{
    
	public function definition() {
        $payment_method = PaymentMethod::inRandomOrder()->first();
        return [
            'bank_id' => function () {

                return Bank::inRandomOrder()->first()->id;
            },
            'user_id' => function () {
                return User::inRandomOrder()->first()->id;
            },

            'acc_name' => $this->faker->name,
            'acc_number' => $this->faker->bankAccountNumber,
            'swift_code' => $this->faker->swiftBicNumber,
            'payment_method' => $payment_method->name,
            'currency_type' => $payment_method->type,
        ];
    }
};
