<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->default('xyz');
            $table->string('license_no')->default('123xyz');
            $table->string('mobile')->default('9825941468');
            $table->string('email')->default('xyz@gmail.com');
            $table->string('aadhar')->default('335443454846');
            $table->longText('user_address');
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
        Schema::dropIfExists('customers');
    }
}
