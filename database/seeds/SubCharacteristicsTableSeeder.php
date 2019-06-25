<?php

use Illuminate\Database\Seeder;

class SubCharacteristicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sub_characteristics')->insert(
            [
                'name' =>'Lacteo',
                'characteristics_id' =>1,
            ]);
        DB::table('sub_characteristics')->insert(
            [
                'name' =>'Gaseosas',
                'characteristics_id' =>1,
            ]);
        DB::table('sub_characteristics')->insert(
            [
                'name' =>'Vitaminas',
                'characteristics_id' =>1,
            ]);
        DB::table('sub_characteristics')->insert(
            [
                'name' =>'Tragos',
                'characteristics_id' =>1,
            ]);
        DB::table('sub_characteristics')->insert(
            [
                'name' =>'Frutas',
                'characteristics_id' =>2,
            ]);
        DB::table('sub_characteristics')->insert(
            [
                'name' =>'Verduras',
                'characteristics_id' =>2,
            ]);
        DB::table('sub_characteristics')->insert(
            [
                'name' =>'Granos',
                'characteristics_id' =>2,
            ]);
        DB::table('sub_characteristics')->insert(
            [
                'name' =>'Hotalizas',
                'characteristics_id' =>2,
            ]);
        DB::table('sub_characteristics')->insert(
            [
                'name' =>'Carne',
                'characteristics_id' =>3,
            ]);
        DB::table('sub_characteristics')->insert(
            [
                'name' =>'Pescado',
                'characteristics_id' =>3,
            ]);
        DB::table('sub_characteristics')->insert(
            [
                'name' =>'Huevos',
                'characteristics_id' =>3,
            ]);
        DB::table('sub_characteristics')->insert(
            [
                'name' =>'Cereales',
                'characteristics_id' =>4,
            ]);
        DB::table('sub_characteristics')->insert(
            [
                'name' =>'Harinas',
                'characteristics_id' =>4,
            ]);
        DB::table('sub_characteristics')->insert(
            [
                'name' =>'Grasas',
                'characteristics_id' =>4,
            ]);
        DB::table('sub_characteristics')->insert(
            [
                'name' =>'Azucares',
                'characteristics_id' =>4,
            ]);
        DB::table('sub_characteristics')->insert(
            [
                'name' =>'Golosinas',
                'characteristics_id' =>5,
            ]);

        DB::table('sub_characteristics')->insert(
            [
                'name' =>'Paquetes',
                'characteristics_id' =>5,
            ]);
        DB::table('sub_characteristics')->insert(
            [
                'name' =>'Proteinas',
                'characteristics_id' =>6,
            ]);
        DB::table('sub_characteristics')->insert(
            [
                'name' =>'Sin Azucar',
                'characteristics_id' =>6,
            ]);
        DB::table('sub_characteristics')->insert(
            [
                'name' =>'Bajo de Azucar',
                'characteristics_id' =>6,
            ]);
        DB::table('sub_characteristics')->insert(
            [
                'name' =>'Calorias',
                'characteristics_id' =>6,
            ]);
    }
}
