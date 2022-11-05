<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('loans', function (Blueprint $table) {
            $table->id();
            $table->string('occupation');
            $table->string('purpose');
            $table->string('reference')->nullable();
            $table->bigInteger('user_id')->unsigned()->index();
            $table->decimal('amount', 60, 2)->default(0);
            $table->decimal('interest_rate', 10, 2)->default(0);
            $table->decimal('monthly_repayment', 60, 2)->default(0);
            $table->decimal('total_repayment', 60, 2)->default(0);
			$table->bigInteger('tenor')->index();
            $table->bigInteger('transaction_id')->unsigned()->index()->nullable();
            $table->boolean('approved')->default(false);
            $table->boolean('active')->default(false);
			$table->timestamp('expiration')->nullable();
            $table->timestamps();
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
        Schema::dropIfExists('loans');
    }
}
