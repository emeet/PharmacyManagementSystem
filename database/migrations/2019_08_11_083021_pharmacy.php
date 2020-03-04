<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pharmacy extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('employee', function (Blueprint $table) {
            $table->increments('id');
            // $table->integer('user_id')->unsigned();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('address');
            $table->integer('phone_number');
            $table->string('gender');
            $table->string('position');
            $table->timestamps();
        });

        Schema::create('company_details', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('employee_id');
            $table->foreign('employee_id')->references('id')->on('employee');
            $table->string('company_name');
            $table->integer('pan_number');
            $table->string('address');
            $table->string('email')->unique();
            $table->integer('phone_number');
            $table->timestamps();
        });

        Schema::create('supplier', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('address');
            $table->string('email')->unique();
            $table->integer('contact_number');
            $table->string('country');
            $table->timestamps();
        });

        Schema::create('medicine', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('employee_id');
            $table->foreign('employee_id')->references('id')->on('employee');
            $table->string('name');
            $table->string('description');
            $table->string('type');
            $table->string('price');
            $table->date('manufacture_date');
            $table->date('expire_date');
            $table->string('photo');
            $table->timestamps();
        });

        Schema::create('stock', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('medicine_id');
            $table->foreign('medicine_id')->references('id')->on('medicine');
            $table->unsignedInteger('supplier_id');
            $table->foreign('supplier_id')->references('id')->on('supplier');
            $table->string('quantity');
            $table->string('price');
            $table->timestamps();
        });

        Schema::create('end_user', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('address');
            $table->integer('phone_number');
            $table->string('gender');
            $table->string('position');
            $table->timestamps();
        });

        Schema::create('booking', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('end_user_id');
            $table->foreign('end_user_id')->references('id')->on('end_user');
            $table->unsignedInteger('medicine_id');
            $table->foreign('medicine_id')->references('id')->on('medicine');
            $table->string('quantity');
            $table->string('price');
            $table->date('booking_date');
            $table->string('status');
            $table->timestamps();
        });

        Schema::create('invoice', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('booking_id');
            $table->foreign('booking_id')->references('id')->on('booking');
            $table->string('quantity');
            $table->string('price');
            $table->date('date');
            $table->string('total_amount');
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
        Schema::dropIfExists('invoice');
        Schema::dropIfExists('booking');
        Schema::dropIfExists('end_user');
        Schema::dropIfExists('stock');
        Schema::dropIfExists('medicine');
        Schema::dropIfExists('company_details');
        Schema::dropIfExists('employee');
        Schema::dropIfExists('supplier');
    }
}
