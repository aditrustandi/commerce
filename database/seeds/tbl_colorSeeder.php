<?php

use Illuminate\Database\Seeder;

class tbl_colorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_color')->insert(
            [
                [
                    'color' => 'Merah',
                    'hexa_color' => '#EF2E2E',
                ],
                [
                    'color' => 'Biru',
                    'hexa_color' => '#0B86D1',
                ],
                [
                    'color' => 'Kuning',
                    'hexa_color' => '#E2F713',
                ],
                [
                    'color' => 'Hijau',
                    'hexa_color' => '#3EE339',
                ],
            ]
        );
    }
}
