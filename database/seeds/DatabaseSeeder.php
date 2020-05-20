<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->truncateTables([
            'periods',
            'semesters',
            'careers',
            'teachers',
            'subjects',
            'groups',
            'students',
            'administrators',
        ]);

            // $this->call(UsersTableSeeder::class);

            $this->call(PeriodSeeder::class);
            $this->call(SchoolSeeder::class);
            $this->call(SemesterSeeder::class);
            $this->call(CareerSeeder::class);
            $this->call(TeacherSeeder::class);
            $this->call(StudentSeeder::class);
            $this->call(SubjectSeeder::class);
            $this->call(GroupSeeder::class);
            $this->call(AdministratorSeeder::class);
    }

    public function truncateTables(array $tables)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');

        foreach ($tables as $table) {
            DB::table($table)->truncate();
        }

        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }

}
