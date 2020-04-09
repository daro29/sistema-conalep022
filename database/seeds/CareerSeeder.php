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
            'nombre' => 'Informatica',
        ]);

        DB::table('careers')->insert([
            'nombre' => 'Hospitalidad Turistica',
        ]);

        DB::table('careers')->insert([
            'nombre' => 'Automotriz',
        ]);
    }
}
