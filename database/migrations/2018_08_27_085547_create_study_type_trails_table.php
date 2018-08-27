<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudyTypeTrailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('study_type_trails', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('trails_id')->unsigned();
            $table->foreign('trails_id')->references('id')->on('trials')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('study_type_id')->unsigned();
            $table->foreign('study_type_id')->references('id')->on('study_types')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('study_type_trails');
    }
}
