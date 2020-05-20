<?php

use App\Subject;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Subject::class, 20)->create()->each(function(Subject $subject){
            $subject->students()->attach([
                rand(1,5),
                rand(6,10),
                rand(10,20),
            ]);
        });

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
