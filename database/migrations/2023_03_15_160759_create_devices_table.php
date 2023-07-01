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
        Schema::create('devices', function (Blueprint $table) {
            $table->id('deviceId');
            $table->unsignedBigInteger('roomId',false);
            $table->foreign('roomId')->references('roomId')->on('rooms')->onDelete('restrict')->onUpdate('cascade');
            $table->unsignedBigInteger('smartDeviceId', false);
            $table->foreign('smartDeviceId')->references('smartDeviceId')->on('smart_devices')->onDelete('restrict')->onUpdate('cascade');
            $table->string('name', 30);
            $table->string('model', 30);
            $table->tinyInteger('status')->default(0);
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
        Schema::dropIfExists('devices');
    }
};
