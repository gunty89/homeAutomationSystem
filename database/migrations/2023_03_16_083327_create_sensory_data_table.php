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
            $table->unsignedBigInteger('roomId', false);
            $table->foreign('roomId')->references('roomId')->on('rooms')->onDelete('restrict')->onUpdate('cascade');
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
