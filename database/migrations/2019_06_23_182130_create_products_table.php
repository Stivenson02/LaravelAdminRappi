<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('image');
            $table->integer('price');
            $table->integer('quantity_total');
            $table->mediumText('description');

            $table->integer('store_id')->unsigned();
            $table->foreign("store_id")->references("id")->on("stores");
            $table->integer('characteristics_id')->unsigned();
            $table->foreign("characteristics_id")->references("id")->on("characteristics");
            $table->integer('sub_characteristics_id_one')->unsigned();
            $table->foreign("sub_characteristics_id_one")->references("id")->on("sub_characteristics");
            $table->integer('sub_characteristics_id_two')->unsigned();
            $table->foreign("sub_characteristics_id_two")->references("id")->on("sub_characteristics");
            $table->integer('sub_characteristics_id_three')->unsigned();
            $table->foreign("sub_characteristics_id_three")->references("id")->on("sub_characteristics");

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
        Schema::dropIfExists('products');
    }
}
