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
        'nombre' => 'Matematicas',
       ]);

       factory(Subject::class)->create([
        'nombre' => 'Sistemas Programables',
       ]);

       factory(Subject::class)->create([
        'nombre' => 'Etica',
       ]);

       factory(Subject::class)->create([
        'nombre' => 'Español',
       ]);
    }
}
