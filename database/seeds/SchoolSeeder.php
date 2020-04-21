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
            'name'    => 'Conalep PLantel 022',
            'telephone'  => '961 616 0553',
            'email'     => 'email@gmail.com',
            'domicile' => ' Calle Libertad No. 654, Chiapa de Corzo Centro, 29160 Chiapa de Corzo, Chis.',
        ]);
    }
}
