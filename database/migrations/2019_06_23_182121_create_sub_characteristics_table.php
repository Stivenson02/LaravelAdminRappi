<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubCharacteristicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_characteristics', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('characteristics_id')->unsigned();
            $table->foreign("characteristics_id")->references("id")->on("characteristics");
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
        Schema::dropIfExists('sub_characteristics');
    }
}
