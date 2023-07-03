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
        Schema::create('logs', function (Blueprint $table) {
            $table->id('logId');
            $table->unsignedBigInteger('userId', false);
            $table->foreign('userId')->references('userId')->on('users')->onDelete('restrict')->onUpdate('cascade');
            $table->unsignedBigInteger('deviceId', false);
            $table->foreign('deviceId')->references('deviceId')->on('devices')->onDelete('restrict')->onUpdate('cascade');
            $table->string('action', 50);
            $table->dateTime('date');
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
        Schema::dropIfExists('logs');
    }
};
