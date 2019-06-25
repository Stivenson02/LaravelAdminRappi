<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateVProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('create view v_products as
                SELECT pr.id, pr.name, pr.image, pr.price, pr.quantity_total, pr.description, 
                pr.store_id, pr.characteristics_id, pr.sub_characteristics_id_one, 
                pr.sub_characteristics_id_two,
                pr.sub_characteristics_id_three, pr.created_at, 
                subone.name AS sub_characteristics_id_one_name, 
                subtwo.name AS sub_characteristics_id_two_name, 
                subthree.name AS sub_characteristics_id_three_name, 
                ch.name AS characteristics_name,
                st.NAME AS store_name
                FROM products pr 
                JOIN characteristics ch ON ch.id = pr.characteristics_id
                JOIN sub_characteristics subone ON subone.id = pr.sub_characteristics_id_one 
                JOIN sub_characteristics subtwo ON subtwo.id = pr.sub_characteristics_id_two 
                JOIN sub_characteristics subthree ON subthree.id = pr.sub_characteristics_id_three
                JOIN stores st ON  st.id = pr.store_id;
                ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW companiesView");
    }
}
