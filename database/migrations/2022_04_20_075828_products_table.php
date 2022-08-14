<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('p_id');
            $table->string('name');
            $table->integer('p_number');
            $table->string('car_model');
            $table->integer('car_year');
            $table->string('req_part');
            $table->string('textarea');
            $table->boolean('status')->default(1);
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
        Schema::dropIfExists('products');
    }
}
