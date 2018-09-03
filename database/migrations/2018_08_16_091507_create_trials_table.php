<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trials', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('name')->nullable();
            $table->string('acronym')->nullable();
            $table->string('authors')->nullable();
            $table->string('publication_year')->nullable();
            $table->string('nb')->nullable();
            $table->string('octar_nb')->nullable();
            $table->string('category')->nullable();
            $table->string('sub_category')->nullable();
//            $table->string('study_type')->nullable();
            $table->string('blinding')->nullable();
            $table->text('description')->nullable();
            $table->text('patient_profile')->nullable();
            $table->string('cross_over')->nullable();
            $table->string('second_randomization')->nullable();
//            $table->string('endpoint_type')->nullable();
//            $table->string('endpoint_result')->nullable();
//            $table->string('statistical_significance')->nullable();
            $table->string('previous_lines')->nullable();
            $table->text('points_of_criticism')->nullable();
            $table->string('link_to_text')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');


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
        Schema::dropIfExists('trials');
    }
}
