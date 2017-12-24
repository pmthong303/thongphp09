<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Movie', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id');
            $table->integer('country_id');
            $table->integer('genres_id');
            $table->string('name');
            $table->string('duration');
            $table->integer('year');
            $table->string('quality');
            $table->string('detail');
            $table->string('image');
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
        Schema::dropIfExists('Movie');
    }
}
