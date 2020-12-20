<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OngkirsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ongkirs')->insert([
            'kota'=>'Jakarta',
            'ongkir'=>23000
        ]);

        DB::table('ongkirs')->insert([
            'kota'=>'Bandung',
            'ongkir'=>30000
        ]);

        DB::table('ongkirs')->insert([
            'kota'=>'Surabaya',
            'ongkir'=>12000
        ]);

        DB::table('ongkirs')->insert([
            'kota'=>'Malang',
            'ongkir'=>8000
        ]);

        DB::table('ongkirs')->insert([
            'kota'=>'Yogyakarta',
            'ongkir'=>20000
        ]);

        DB::table('ongkirs')->insert([
            'kota'=>'Bogor',
            'ongkir'=>35000
        ]);

    }
}
