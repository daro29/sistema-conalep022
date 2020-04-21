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
            'name' => 'Informatica',
        ]);

        DB::table('careers')->insert([
            'name' => 'Hospitalidad Turistica',
        ]);

        DB::table('careers')->insert([
            'name' => 'Automotriz',
        ]);
    }
}
