<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectExperienceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_experences', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->string('task_name')->nullable();
            $table->string('task_coding')->nullable();
            $table->string('task_principal')->nullable();
            $table->float('sum_expenditure')->nullable();
            $table->float('actual_expenditure')->nullable();
            $table->float('remain_expenditure')->nullable();
            $table->string('station_participant')->nullable();
            $table->string('project_name')->nullable();
            $table->string('project_principal')->nullable();
            $table->string('project_coding')->nullable();
            $table->string('source_department')->nullable();
            $table->string('project_category')->nullable();
            $table->string('project_state')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('other_project')->nullable();
            $table->date('end_year')->nullable();
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
        Schema::drop('project_experences');
    }
}
