<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
 
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('userId');
            $table->string('firstName', 15);
            $table->string('surname', 15);
            $table->string('email', 50);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('city', 15)->nullable();
            $table->string('district', 15)->nullable();
            $table->string('street', 15)->nullable();
            $table->string('phoneNumber', 15)->nullable();
            $table->string('password', 60);
            $table->tinyInteger('isAdmin')->default(0);
            $table->tinyInteger('status')->default(0);
            $table->rememberToken();
            $table->timestamp('lastLogin')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
};
