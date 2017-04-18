<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesTable extends Migration
{

    public function up()
    {
        Schema::create('movies', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name',25);
            $table->integer('year');
            $table->integer('director_id')->unsigned();
            $table->integer('genre_id')->unsigned();
            $table->foreign('director_id')
                ->references('id')
                ->on('directors');
            $table->foreign('genre_id')
                ->references('id')
                ->on('genres');

        });
    }

    public function down()
    {
        Schema::drop('movies');
    }
}
