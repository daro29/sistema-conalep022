<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CareerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('careers')->insert([
            'name'          =>  'Informatica',
            'created_at'    =>  '2020-04-22 16:51:57',
            'updated_at'    =>  '2020-04-22 16:51:57',
        ]);

        DB::table('careers')->insert([
            'name'          => 'Hospitalidad Turistica',
            'created_at'    =>  '2019-03-12 16:51:57',
            'updated_at'    =>  '2019-03-12 16:51:57',
        ]);

        DB::table('careers')->insert([
            'name'          => 'Automotriz',
            'created_at'    =>  '2018-01-15 16:51:57',
            'updated_at'    =>  '2018-01-15 16:51:57',
        ]);

        DB::table('careers')->insert([
            'name'          => 'Alimentos y bebidas',
            'created_at'    =>  '2018-01-15 16:51:57',
            'updated_at'    =>  '2018-01-15 16:51:57',
        ]);

        DB::table('careers')->insert([
            'name'          => 'Electronica',
            'created_at'    =>  '2018-01-15 16:51:57',
            'updated_at'    =>  '2018-01-15 16:51:57',
        ]);
    }
}
