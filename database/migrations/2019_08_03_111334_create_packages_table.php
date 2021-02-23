<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->unique();
            $table->integer('roi');
            $table->bigInteger('min_deposit')->unsigned();
            $table->bigInteger('max_deposit')->unsigned();
            $table->integer('turnover')->unsigned();
            $table->bigInteger('rank')->default(1);
            $table->integer('loop_termination')->unsigned();
            $table->integer('first_level_ref_commission')->default(0);
            $table->integer('second_level_ref_commission')->default(0); 

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('packages');
    }
}
