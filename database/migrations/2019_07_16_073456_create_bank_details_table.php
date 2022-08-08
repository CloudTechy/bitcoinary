<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBankDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bank_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('wallet')->index()->nullable();
            $table->bigInteger('user_id')->unsigned()->index();
            $table->string('payment_method')->index();
            $table->string('currency_type')->index();
            $table->string('currency')->nullable();
            $table->bigInteger('bank_id')->unsigned()->index()->nullable();
            $table->string('acc_number')->nullable();
            $table->string('acc_name')->nullable();
            $table->string('swift_code')->nullable();
            $table->string('crypto_memo')->nullable();
            $table->string('crypto_standard')->nullable();
            $table->timestamps();
            $table->foreign('bank_id')->references('id')->on('banks');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bank_details');
    }
}
