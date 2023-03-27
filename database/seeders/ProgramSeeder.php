<?php

namespace Database\Seeders;

use App\Models\Programare;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Programare::factory()->count(1000)->create();
    }
}