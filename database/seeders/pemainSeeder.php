<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class pemainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 6; $i++) {
            pemain::create([
                'name' => fake()->name(),
                'no_punggung' => fake()-> numberBetween(0,99),
                'posisi' => fake()->sentence(1),      
            ]);
        } 
    }
}
