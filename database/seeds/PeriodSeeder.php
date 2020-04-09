<?php

use Illuminate\Database\Seeder;
use App\Period;

class PeriodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Period::class, 5)->create();
    }
}
