<?php

use App\Career;
use App\Student;
use App\Semester;
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
        $semesters  =   Semester::all();
        $careers    =   Career::all();

        $students = factory(Student::class, 20)->make();

        foreach ($students as $student){
            $semester   =   $semesters->random();
            $career     =   $careers->random();

            $semester->students()->save($student);
            $career->students()->save($student);
        }


        DB::table('students')->insert([
            'name'          => 'darinel',
            'enrollment'    => '16270167',
            'semester_id'   => '4',
            'career_id'     => '2',
            'password'      => bcrypt('123123'),
        ]);
    }

}
