<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmergencyRequestsTable extends Migration
{
    public function up()
    {
        Schema::create('emergency_requests', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('email');
            $table->string('country');
            $table->string('city');
            $table->text('request');
            $table->string('status')->default('Pending');
            $table->string('urgency')->default('Low');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('emergency_requests');
    }
}
