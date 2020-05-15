<?php

use App\Student;
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
        factory(Student::class, 20)->create();

        DB::table('students')->insert([
            'name'        => 'darinel',
            'enrollment'     => '16270167',
            'password'      => bcrypt('123123'),
        ]);
    }

}
