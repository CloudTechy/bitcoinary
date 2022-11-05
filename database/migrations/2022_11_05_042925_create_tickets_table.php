<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('department')->index();
            $table->string('subject');
            $table->string('message');
            $table->string('pending_remark')->nullable();
            $table->string('closing_remark')->nullable();
            $table->bigInteger('user_id')->unsigned()->index();
            $table->string('status')->index();
            $table->bigInteger('admin_username')->index()->nullable();
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
        Schema::dropIfExists('tickets');
    }
}
