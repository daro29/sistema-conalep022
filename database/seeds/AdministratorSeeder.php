<?php

use Illuminate\Database\Seeder;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('administrators')->insert([
            'name'      => 'Holly',
            'email'     => 'Holly_hollly71@yahoo.com',
            'password'  => bcrypt('admin123'),
        ]);
    }
}
