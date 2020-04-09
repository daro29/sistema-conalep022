<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SemesterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('semesters')->insert([
            'nombre' => 'Primer Semestre',
        ]);
        DB::table('semesters')->insert([
            'nombre' => 'Segundo Semestre',
        ]);
        DB::table('semesters')->insert([
            'nombre' => 'Tercer Semestre',
        ]);
        DB::table('semesters')->insert([
            'nombre' => 'Cuarto Semestre',
        ]);
        DB::table('semesters')->insert([
            'nombre' => 'Quinto Semestre',
        ]);
        DB::table('semesters')->insert([
            'nombre' => 'Sexto Semestre',
        ]);
    }
}
