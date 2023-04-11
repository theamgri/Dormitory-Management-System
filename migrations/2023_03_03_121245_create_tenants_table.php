<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTenantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenants', function (Blueprint $table) {
            $table->id();
    $table->string('first_name');
    $table->string('last_name');
    $table->string('email');
    $table->string('address');
    $table->string('phone_number');
    $table->string('status');
    $table->unsignedBigInteger('room_id');
    $table->foreign('room_id')->references('id')->on('rooms')->onDelete('cascade');
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
        Schema::dropIfExists('tenants');
    }
}
