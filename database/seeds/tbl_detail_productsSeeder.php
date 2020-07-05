<?php

use Illuminate\Database\Seeder;

class tbl_detail_productsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_detail_products')->insert(
            [
                [
                    'id_master_product' => 1,
                    'id_color' => 2,
                    'stock' => rand(0, 20),
                    'size' => 'L',
                ],
                [
                    'id_master_product' => 2,
                    'id_color' => 1,
                    'stock' => rand(0, 20),
                    'size' => 'M',
                ],
                [
                    'id_master_product' => 2,
                    'id_color' => 4,
                    'stock' => rand(0, 20),
                    'size' => 'S',
                ],
                [
                    'id_master_product' => 3,
                    'id_color' => 3,
                    'stock' => rand(0, 20),
                    'size' => 'S',
                ],
            ]
        );
    }
}
