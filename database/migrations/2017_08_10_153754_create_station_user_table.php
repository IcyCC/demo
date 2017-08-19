<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStationUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('station_user', function (Blueprint $table) {
            //// Create table for associating stations to users (Many-to-Many)
                $table->integer('user_id')->unsigned();
                $table->integer('station_id')->unsigned();

                $table->foreign('user_id')->references('id')->on('users')
                    ->onUpdate('cascade')->onDelete('cascade');
                $table->foreign('station_id')->references('id')->on('stations')
                    ->onUpdate('cascade')->onDelete('cascade');

                $table->primary(['user_id', 'station_id']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('station_user', function (Blueprint $table) {
            //
        });
    }
}
