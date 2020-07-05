<?php

use Illuminate\Database\Seeder;

class tbl_brandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_brand')->insert(
            [
                [
                    'brand' => 'Brand Z',
                ],
                [
                    'brand' => 'Brand X',
                ],
                [
                    'brand' => 'Brand Y',
                ],
            ]
        );
    }
}
