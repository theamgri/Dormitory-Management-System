<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('Reservation', function (Blueprint $table) {
        $table->id();
    $table->string('first_name');
    $table->string('last_name');
    $table->string('email');
    $table->string('address');
    $table->string('phone_number');
    $table->string('status');
    $table->unsignedBigInteger('Reservation_id');
    $table->foreign('Reservation_id')->references('id')->on('Reservation')->onDelete('cascade');
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
        Schema::dropIfExists('Reservation');
    }
}
