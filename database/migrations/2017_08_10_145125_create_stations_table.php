<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('station_coding')->unique();
            $table->string('regine')->nullable();
            $table->string('stations_longitude')->nullable();
            $table->string('stations_latitude')->nullable();
            $table->float('elevation')->nullable();
            $table->string('land_form')->nullable();
            $table->string('soil_kind')->nullable();
            $table->string('climatic_zone')->nullable();
            $table->string('remarks')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('stations');
    }
}
