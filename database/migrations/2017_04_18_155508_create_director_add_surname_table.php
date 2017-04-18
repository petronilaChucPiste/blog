<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDirectorAddSurnameTable extends Migration
{

    public function up()
    {
        Schema::table('directors', function(Blueprint $table) {
            $table->string('surname',25);
            // Schema declaration
            // Constraints declaration

        });
    }

    public function down()
    {
        Schema::table('directors',function(Blueprint $table){
            $table->dropcolumn('surname',25);
        });

    }
}
