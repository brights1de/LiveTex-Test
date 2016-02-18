<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Kalnoy\Nestedset\NestedSet;

class CreateNewPeoplesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peoples',
            function (Blueprint $peoples) {
                $peoples->increments('id');
                $peoples->string('name', 25);
                $peoples->string('surname', 25);
                $peoples->integer('age')->unsigned();
                $peoples->enum('gender', ['male', 'female']);
                $peoples->integer('spouse')->nullable()->unsigned();
                $peoples->foreign('spouse')->references('id')->on('peoples');
                NestedSet::columns($peoples);
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('peoples');
    }
}
