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
        Schema::create('sensory_data', function (Blueprint $table) {
            $table->id('sensoryDataId');
            $table->unsignedBigInteger('smartDeviceId', false);
            $table->foreign('smartDeviceId')->references('smartDeviceId')->on('smart_devices')->onDelete('restrict')->onUpdate('cascade');
            $table->float('temperature');
            $table->float('lightLevel');
            $table->float('humidity');
            $table->dateTime('collectedTime');
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
        Schema::dropIfExists('sensory_data');
    }
};
