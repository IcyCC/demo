<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndexInfomationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        //土壤样品表
        Schema::create('soil_samples', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->string('sample_name')->nullable();
            $table->string('sample_coding')->nullable();
            $table->string('soil_category')->nullable();
            $table->string('parent_material')->nullable();
            $table->string('gather_place')->nullable();
            $table->string('place_name')->nullable();
            $table->string('vegetation_type')->nullable();
            $table->string('sample_depth')->nullable();
            $table->dateTime('sample_date')->nullable();
            $table->string('pretreatment')->nullable();
            $table->string('sample_form')->nullable();
            $table->string('save_media')->nullable();
            $table->float('save_number')->nullable();
            $table->string('save_place')->nullable();
            $table->string('open_service')->nullable();
            $table->string('remarks')->nullable();
        });
        //植物样品表
        Schema::create('plant_samples', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->string('sample_name')->nullable();
            $table->string('sample_coding')->nullable();
            $table->string('species_chinese_name')->nullable();
            $table->string('species_name')->nullable();
            $table->string('family_chinese_name')->nullable();
            $table->string('science_name')->nullable();
            $table->string('sample_part')->nullable();
            $table->dateTime('sample_date')->nullable();
            $table->string('sample_place')->nullable();
            $table->string('sample_place_name')->nullable();
            $table->string('habitat')->nullable();
            $table->string('pretreatment')->nullable();
            $table->string('sample_form')->nullable();
            $table->float('save_number')->nullable();
            $table->string('save_way')->nullable();
            $table->string('open_service')->nullable();
            $table->string('remarks')->nullable();
        });

        //植物标本表
        Schema::create('plant_specimens', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->string('sample_name')->nullable();
            $table->string('sample_coding')->nullable();
            $table->string('species_chinese_name')->nullable();
            $table->string('species_name')->nullable();
            $table->string('family_chinese_name')->nullable();
            $table->string('science_name')->nullable();
            $table->dateTime('gather_date')->nullable();
            $table->string('gather_people')->nullable();
            $table->string('gather_place')->nullable();
            $table->string('place_name')->nullable();
            $table->string('habitat')->nullable();
            $table->string('authenticate_people')->nullable();
            $table->dateTime('authenticate_date')->nullable();
            $table->string('sample_form')->nullable();
            $table->string('sample_type')->nullable();
            $table->string('save_place')->nullable();
            $table->string('open_service')->nullable();
            $table->string('remarks')->nullable();
        });

        //植物标本表
        Schema::create('animal_specimens', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->string('sample_name')->nullable();
            $table->string('sample_coding')->nullable();
            $table->string('species_chinese_name')->nullable();
            $table->string('species_name')->nullable();
            $table->string('family_chinese_name')->nullable();
            $table->string('science_name')->nullable();
            $table->dateTime('gather_date')->nullable();
            $table->string('gather_people')->nullable();
            $table->string('gather_place')->nullable();
            $table->string('place_name')->nullable();
            $table->string('habitat')->nullable();
            $table->string('authenticate_people')->nullable();
            $table->dateTime('authenticate_date')->nullable();
            $table->string('save_way')->nullable();
            $table->string('save_place')->nullable();
            $table->string('open_service')->nullable();
            $table->string('remarks')->nullable();
        });

        //土壤剖面标本表
        Schema::create('soil_sections', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->string('sample_name')->nullable();
            $table->string('sample_coding')->nullable();
            $table->string('soil_category')->nullable();
            $table->string('parent_material')->nullable();
            $table->string('gather_place')->nullable();
            $table->string('place_name')->nullable();
            $table->float('sampling_depth')->nullable();
            $table->string('profile_trait')->nullable();
            $table->dateTime('sample_date')->nullable();
            $table->string('save_media')->nullable();
            $table->string('save_place')->nullable();
            $table->string('open_service')->nullable();
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
