<?php

use Illuminate\Database\Seeder;
use App\Subject;
class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(Subject::class)->create([
        'name' => 'Matematicas',
       ]);

       factory(Subject::class)->create([
        'name' => 'Sistemas Programables',
       ]);

       factory(Subject::class)->create([
        'name' => 'Etica',
       ]);

       factory(Subject::class)->create([
        'name' => 'Español',
       ]);
    }
}
