<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelevantFiguresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relevant_figures', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('trials_id')->unsigned();
            $table->string('link');
            $table->text('description');
            $table->foreign('trials_id')->references('id')->on('trials')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('relevant_figures');
    }
}
