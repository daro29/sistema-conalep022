<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'nombre'        => 'darinel',
            'matricula'     => '16270167',
            'password'      => bcrypt('123123'),
        ]);
    }

}
