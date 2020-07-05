<?php

use Illuminate\Database\Seeder;

class tbl_master_productsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_master_products')->insert(
            [
                [
                    'id_brand' => 1,
                    'name' => 'Product - '.Str::random(4),
                    'main_image' => 'assets/images/products/default.jpg',
                    'price' => rand(1000, 2000000),
                    'total_sold' => rand(0, 1000),
                ],
                [
                    'id_brand' => 1,
                    'name' => 'Product - '.Str::random(4),
                    'main_image' => 'assets/images/products/default.jpg',
                    'price' => rand(1000, 2000000),
                    'total_sold' => rand(0, 1000),
                ],
                [
                    'id_brand' => 2,
                    'name' => 'Product - '.Str::random(4),
                    'main_image' => 'assets/images/products/default.jpg',
                    'price' => rand(1000, 2000000),
                    'total_sold' => rand(0, 1000),
                ],
                [
                    'id_brand' => 3,
                    'name' => 'Product - '.Str::random(4),
                    'main_image' => 'assets/images/products/default.jpg',
                    'price' => rand(1000, 2000000),
                    'total_sold' => rand(0, 1000),
                ],
                [
                    'id_brand' => 3,
                    'name' => 'Product - '.Str::random(4),
                    'main_image' => 'assets/images/products/default.jpg',
                    'price' => rand(1000, 2000000),
                    'total_sold' => rand(0, 1000),
                ],
                [
                    'id_brand' => 3,
                    'name' => 'Product - '.Str::random(4),
                    'main_image' => 'assets/images/products/default.jpg',
                    'price' => rand(1000, 2000000),
                    'total_sold' => rand(0, 1000),
                ],
                [
                    'id_brand' => 3,
                    'name' => 'Product - '.Str::random(4),
                    'main_image' => 'assets/images/products/default.jpg',
                    'price' => rand(1000, 2000000),
                    'total_sold' => rand(0, 1000),
                ],
                [
                    'id_brand' => 3,
                    'name' => 'Product - '.Str::random(4),
                    'main_image' => 'assets/images/products/default.jpg',
                    'price' => rand(1000, 2000000),
                    'total_sold' => rand(0, 1000),
                ],
                [
                    'id_brand' => 3,
                    'name' => 'Product - '.Str::random(4),
                    'main_image' => 'assets/images/products/default.jpg',
                    'price' => rand(1000, 2000000),
                    'total_sold' => rand(0, 1000),
                ],
                [
                    'id_brand' => 3,
                    'name' => 'Product - '.Str::random(4),
                    'main_image' => 'assets/images/products/default.jpg',
                    'price' => rand(1000, 2000000),
                    'total_sold' => rand(0, 1000),
                ]
            ]
        );
    }
}
