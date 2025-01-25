<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('fullName');  // Changed to fullName to match your controller
            $table->string('email')->unique();
            $table->string('password');
            $table->year('birthYear');  // Changed to birthYear to match your controller
            $table->string('country');
            $table->string('city');
            $table->string('alertType');  // Changed to alertType to match your controller
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}


