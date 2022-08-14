<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('b_id');
            $table->string('name');
            $table->string('email')->unique();
            $table->boolean('status')->default(1);
            $table->integer('btype')->default(1);
            $table->string('p_number', 15);
            $table->string('v_number', 15);
            $table->string('textarea')->nullable();
            $table->integer('u_id')->unsigned();
            $table->foreign('u_id')->references('id')->on('users');
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
        Schema::dropIfExists('bookings');
    }
}