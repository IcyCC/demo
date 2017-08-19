<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePapersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('papers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->string('journal_full_name')->nullable();
            $table->string('standard_journal_no')->nullable();
            $table->date('year')->nullable();
            $table->string('reel')->nullable();
            $table->string('issue')->nullable();
            $table->string('page')->nullable();
            $table->string('rank')->nullable();
            $table->string('all_author_name')->nullable();
            $table->string('corresponding_author')->nullable();
            $table->integer('first_author_rank')->nullable();
            $table->string('category')->nullable();
            $table->float('impact_factor')->nullable();
            $table->string('international_paper')->nullable();
            $table->string('enclosure')->nullable();
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
        Schema::table('papers', function (Blueprint $table) {
            //
        });
    }
}
