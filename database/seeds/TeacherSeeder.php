<?php

use App\Teacher;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Teacher::class, 20)->create();

        DB::table('teachers')->insert([
            'name'    =>  'Filogonio',
            'password'  =>  bcrypt('123123'),
        ]);
    }
}
