<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('car_name');
            $table->integer('seat');
            $table->integer('bags');
            $table->integer('price');
            $table->integer('km_price');
            $table->string('path');
            $table->string('number');
            $table->string('city');
            $table->integer('in_time_hour')->nullable();
            $table->integer('in_time_minute')->nullable();
            $table->integer('out_time_hour')->nullable();
            $table->integer('out_time_minute')->nullable();
            $table->date('start_date')->nullable();
            $table->date('drop_date')->nullable();
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
        Schema::dropIfExists('cars');
    }
}
