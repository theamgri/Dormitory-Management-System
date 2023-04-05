<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceRequestsTable extends Migration
{   
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_requests', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('status', ['in_progress', 'completed']);
            $table->unsignedBigInteger('tenant_id');
            $table->unsignedBigInteger('room_id');
            $table->date('date_issued');
            $table->timestamps();
        
            $table->foreign('tenant_id')->references('id')->on('tenants');
            $table->foreign('room_id')->references('room_id')->on('tenants');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service_requests');
    }
}
