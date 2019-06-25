<?php

use Illuminate\Database\Seeder;

class CharacteristicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('characteristics')->insert(
            [
                'name' =>'Bebidas'
            ]);
        DB::table('characteristics')->insert(
            [
                'name' =>'Organico'
            ]);
        DB::table('characteristics')->insert(
            [
                'name' =>'Animal'
            ]);
        DB::table('characteristics')->insert(
            [
                'name' =>'Hogar'
            ]);
        DB::table('characteristics')->insert(
            [
                'name' =>'Snacks'
            ]);
        DB::table('characteristics')->insert(
            [
                'name' =>'Saludable'
            ]);

    }
}
