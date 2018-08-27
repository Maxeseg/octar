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
            $table->string('name');
            $table->string('acronym');
            $table->string('authors');
            $table->string('publication_year');
            $table->string('nb');
            $table->string('octar_nb');
            $table->string('category');
            $table->string('sub_category');
//            $table->string('study_type');
            $table->string('blinding');
            $table->text('description');
            $table->string('patient_profile');
            $table->string('cross_over');
            $table->string('second_randomization');
            $table->string('endpoint_type');
            $table->string('endpoint_result');
            $table->string('statistical_significance');
            $table->string('previous_lines');
            $table->string('points_of_criticism');
            $table->string('link_to_text');
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
