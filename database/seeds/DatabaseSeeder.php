<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            tbl_master_productsSeeder::class,
            tbl_colorSeeder::class,
            tbl_detail_productsSeeder::class,
            tbl_brandSeeder::class
        ]);
    }
}
