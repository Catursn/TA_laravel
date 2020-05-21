<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTanaman2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tanaman2', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nutrisi');
            $table->string('sensor1');
            $table->string('sensor2');
            $table->string('sensor3');
            $table->string('suhu');
            $table->string('cahaya');
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
        Schema::dropIfExists('tanaman2');
    }
}
