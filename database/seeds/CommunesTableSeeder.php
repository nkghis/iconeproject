<?php

use Illuminate\Database\Seeder;

class CommunesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Communes')->insert([
            ['name' => 'Abobo'],
            ['name' => 'Adjamé'],
            ['name' => 'Attécoubé'],
            ['name' => 'Bingerville'],
            ['name' => 'Cocody'],
            ['name' => 'Koumassi'],
            ['name' => 'Marcory'],
            ['name' => 'Plateau'],
            ['name' => 'Port-Bouet'],
            ['name' => 'Treichville'],
            ['name' => 'Yopougon']


        ]);
    }
}
