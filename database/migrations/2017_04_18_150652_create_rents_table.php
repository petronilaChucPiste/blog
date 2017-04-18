<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRentsTable extends Migration
{

    public function up()
    {
        Schema::create('rents', function(Blueprint $table) {
            $table->increments('id');
            $table->date('date_start');
            $table->date('date_end');
            $table->boolean('returned')->default(false);
            $table->integer('movie_id')->unsigned();
            $table->integer('client_id')->unsigned();
            $table->foreign('movie_id')
                ->references('id')
                ->on('movies');
            $table->foreign('client_id')
                ->references('id')
                ->on('clients');

        });
    }

    public function down()
    {
        Schema::drop('rents');
    }
}
