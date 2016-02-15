<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeoplesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peoples',
            function (Blueprint $table) {
                $table->increments('id');
                $table->string('name', 25);
                $table->string('surname', 25);
                $table->integer('age')->unsigned();
                $table->enum('gender', ['male', 'female']);
                $table->integer('family_id')->unsigned();
                $table->integer('generation_id')->unsigned();
                $table->foreign('family_id')->references('id')->on('families');
                $table->foreign('generation_id')->references('id')->on('generations');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }

}
