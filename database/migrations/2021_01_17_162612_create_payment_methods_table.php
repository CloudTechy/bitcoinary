<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentMethodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_methods', function (Blueprint $table) {
            // $table->bigIncrements('id');
            $table->string('name')->index();
            $table->primary('name');
            $table->string('show_on')->default('both');
            $table->string('image');
            $table->string('type')->index();
        });
        Schema::table('bank_details', function ($table) {
            $table->foreign('payment_method')->references('name')->on('payment_methods')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('currency_type')->references('type')->on('payment_methods')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payment_methods');
    }
}
