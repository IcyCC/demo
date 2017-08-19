<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublishesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publishes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->date('publish_year')->nullable();
            $table->string('work_name')->nullable();
            $table->string('author_list')->nullable();
            $table->string('publish_address')->nullable();
            $table->string('publish_press')->nullable();
            $table->integer('publish_pages')->nullable();
            $table->string('publish_remarks')->nullable();
        });

        Schema::create('registers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->date('register_year')->nullable();
            $table->string('register_name')->nullable();
            $table->string('register_number')->nullable();
            $table->string('register_category')->nullable();
            $table->string('register_inventor_rank')->nullable();
            $table->string('register_remarks')->nullable();
        });

        Schema::create('honors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->string('honor_name')->nullable();
            $table->string('honor_category')->nullable();
            $table->string('honor_rank')->nullable();
            $table->string('honor_unit')->nullable();
            $table->string('honor_list')->nullable();
            $table->string('remarks')->nullable();
        });

        Schema::create('other_achievements', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->string('other_achievement_name')->nullable();
            $table->string('other_achievement_category')->nullable();
            $table->string('other_achievement_introduce')->nullable();
            $table->string('other_achievement_all_unit')->nullable();
            $table->string('other_achievement_rank')->nullable();
            $table->string('other_achievement_remarks')->nullable();
            $table->string('other_achievement_people')->nullable();
            $table->string('other_achievement_first_person')->nullable();
            $table->string('other_achievement_material')->nullable();
            $table->string('other_achievement_remark')->nullable();
        });


        Schema::create('sample_services', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->string('sample_service_name')->nullable();
            $table->string('sample_service_category')->nullable();
            $table->string('sample_service_describe')->nullable();
            $table->string('sample_service_promotional_effectiveness')->nullable();
            $table->string('sample_service_contact')->nullable();
            $table->string('sample_service_enclosure')->nullable();

        });

        Schema::create('academic_exchanges', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->string('academic_exchange_type')->nullable();
            $table->dateTime('academic_exchange_start_time')->nullable();
            $table->dateTime('academic_exchange_end_time')->nullable();
            $table->string('academic_exchange_site')->nullable();
            $table->integer('academic_exchange_number')->nullable();
            $table->char('academic_exchange_international_exchange',4)->nullable();
            $table->string('academic_exchange_personal_unit')->nullable();
            $table->string('academic_exchange_main_personal_duty')->nullable();
            $table->string('academic_exchange_purpose')->nullable();
            $table->string('academic_exchange_exchange_protocal')->nullable();
            $table->string('academic_exchange_enclosure')->nullable();
            $table->string('academic_exchange_remarks')->nullable();


        });

        Schema::create('attend_meetings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->string('meeting_name')->nullable();
            $table->string('meeting_level')->nullable();
            $table->string('meeting_category')->nullable();
            $table->string('meeting_host_unit')->nullable();
            $table->dateTime('meeting_date')->nullable();
            $table->string('meeting_place')->nullable();
            $table->string('meeting_type')->nullable();
            $table->string('report_name')->nullable();
            $table->string('reporter')->nullable();
            $table->string('attendee')->nullable();
            $table->string('remarks')->nullable();


        });

        Schema::create('organizer', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->string('name')->nullable();
            $table->string('level')->nullable();
            $table->string('category')->nullable();
            $table->string('host_unit')->nullable();
            $table->string('organizer_unit')->nullable();
            $table->string('cooperation_unit')->nullable();
            $table->string('moderator')->nullable();
            $table->dateTime('date')->nullable();
            $table->string('place')->nullable();
            $table->integer('sum_number')->nullable();
            $table->integer('foreign_number')->nullable();
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
        Schema::table('publishes', function (Blueprint $table) {
            //
        });
    }
}
