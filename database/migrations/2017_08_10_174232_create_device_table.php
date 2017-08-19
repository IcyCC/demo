<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeviceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //仪器设备表
        Schema::create('instrument_equipments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->string('name')->nullable();
            $table->string('manufacturers')->nullable();
            $table->float('total_value')->nullable();
            $table->string('model')->nullable();
            $table->string('function')->nullable();
            $table->dateTime('start_date')->nullable();
            $table->string('unit')->nullable();
            $table->string('cumulative_date')->nullable();
            $table->string('condition')->nullable();
            $table->string('type')->nullable();
            $table->string('open_service')->nullable();
            $table->string('fund_source')->nullable();
            $table->string('remarks')->nullable();
        });

        //观测设施表
        Schema::create('observation_equipments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->string('name')->nullable();
            $table->string('type')->nullable();
            $table->dateTime('start_date')->nullable();
            $table->string('service_time')->nullable();
            $table->string('equipment_area')->nullable();
            $table->string('main_equipment')->nullable();
            $table->string('main_project')->nullable();
            $table->string('work')->nullable();
            $table->string('place')->nullable();
            $table->string('place_name')->nullable();
            $table->float('longitude')->nullable();
            $table->float('latitude')->nullable();
            $table->float('elevation')->nullable();
            $table->string('soil_category')->nullable();
            $table->string('plant_type')->nullable();
            $table->string('open_service')->nullable();
            $table->string('remarks')->nullable();
        });

        //建筑设施表
        Schema::create('building_equipments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->string('name_category')->nullable();
            $table->string('function_category')->nullable();
            $table->string('function_description')->nullable();
            $table->float('area')->nullable();
            $table->dateTime('date')->nullable();
            $table->float('fund')->nullable();
            $table->string('fund_source')->nullable();
            $table->float('maintain_fund')->nullable();
            $table->string('maintain_fund_source')->nullable();
            $table->string('remarks')->nullable();
        });

        //车船类设施表
        Schema::create('vehicle_boat_equipments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->string('brand')->nullable();
            $table->string('function_description')->nullable();
            $table->dateTime('buy_date')->nullable();
            $table->float('fund')->nullable();
            $table->string('fund_source')->nullable();
            $table->string('remarks')->nullable();
        });

        //样地信息表
        Schema::create('sample_area_information', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->string('sample_name')->nullable();
            $table->string('sample_coding')->nullable();
            $table->float('longitude')->nullable();
            $table->float('latitude')->nullable();
            $table->float('elevation')->nullable();
            $table->string('slope_angle')->nullable();
            $table->string('slope_direction')->nullable();
            $table->string('slope_place')->nullable();
            $table->string('soil_type')->nullable();
            $table->float('soil_depth')->nullable();
            $table->string('coenotype')->nullable();
            $table->float('forest_age')->nullable();
            $table->string('origination')->nullable();
            $table->float('numbers')->nullable();
            $table->float('area')->nullable();
            $table->string('shape')->nullable();
            $table->string('year')->nullable();
            $table->string('remarks')->nullable();
        });

        //坡面信息表
        Schema::create('slope_information', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->string('sample_name')->nullable();
            $table->string('sample_coding')->nullable();
            $table->float('longitude')->nullable();
            $table->float('latitude')->nullable();
            $table->float('elevation')->nullable();
            $table->string('slope_angle')->nullable();
            $table->string('slope_direction')->nullable();
            $table->string('slope_place')->nullable();
            $table->string('soil_type')->nullable();
            $table->float('soil_depth')->nullable();
            $table->string('coenotype')->nullable();
            $table->float('forest_age')->nullable();
            $table->string('origination')->nullable();
            $table->float('area')->nullable();
            $table->string('shape')->nullable();
            $table->string('year')->nullable();
            $table->string('remarks')->nullable();
        });

        //测流堰信息表
        Schema::create('weir_information', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->string('name')->nullable();
            $table->string('coding')->nullable();
            $table->float('longitude')->nullable();
            $table->float('latitude')->nullable();
            $table->float('elevation')->nullable();
            $table->string('coenotype')->nullable();
            $table->float('forest_age')->nullable();
            $table->string('origination')->nullable();
            $table->float('area')->nullable();
            $table->string('year')->nullable();
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
        //
    }
}
