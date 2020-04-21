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
            'name' => 'Primer Semestre',
        ]);
        DB::table('semesters')->insert([
            'name' => 'Segundo Semestre',
        ]);
        DB::table('semesters')->insert([
            'name' => 'Tercer Semestre',
        ]);
        DB::table('semesters')->insert([
            'name' => 'Cuarto Semestre',
        ]);
        DB::table('semesters')->insert([
            'name' => 'Quinto Semestre',
        ]);
        DB::table('semesters')->insert([
            'name' => 'Sexto Semestre',
        ]);
    }
}
