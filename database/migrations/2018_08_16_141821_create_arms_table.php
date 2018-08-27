<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arms', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('trials_id')->unsigned();
            $table->string('nb');
            $table->string('name');
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
        Schema::dropIfExists('arms');
    }
}
