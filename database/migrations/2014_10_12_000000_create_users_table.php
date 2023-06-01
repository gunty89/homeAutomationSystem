<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('userId');
            $table->string('firstName', 15);
            $table->string('surname', 15);
            $table->string('email', 50);
            $table->string('password', 60);
            $table->tinyInteger('isAdmin')->default(0);
            $table->tinyInteger('status')->default(0);
            $table->rememberToken();
            $table->timestamp('lastLogin')->nullable();
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
        Schema::dropIfExists('users');
    }
};
