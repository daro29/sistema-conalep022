<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('schools')->insert([
            'name'      => 'Conalep Plantel 022',
            'telephone' => '9616160553',
            'email'     => 'email@gmail.com',
            'domicile'  => 'Calle Libertad barrio Benito Juárez No. 654, Chiapa de Corzo Centro',
        ]);
    }
}
