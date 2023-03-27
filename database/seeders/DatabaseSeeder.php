<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(InvitationSeeder::class);
        $this->call(DoctorSeeder::class);
        $this->call(PacientSeeder::class);
        $this->call(IstoricMedicalSeeder::class);
        $this->call(ProgramSeeder::class);
    }
}
