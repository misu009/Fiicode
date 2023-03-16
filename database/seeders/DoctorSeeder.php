<?php

namespace Database\Seeders;

use App\Models\Doctor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $doctors = [
            [
                'nume' => 'Livadaru',
                'prenume' => 'Mihail',
                'email' => 'mihai@test.ro',
                'data_nasterii' => date('Y-m-d H:i:s'),
                'adresa' => [
                    'judet' => 'Iasi',
                    'localitate' => 'Iasi',
                    'cartier' => 'Nicolaina 2',
                    'strada' => '..',
                    'bloc' => '..',
                    'apartament' => '..',
                ],
                'password' => Hash::make('12345'),
            ],
            [
                'nume' => 'Tasha',
                'prenume' => 'Tashuca',
                'email' => 'tasha@test.ro',
                'data_nasterii' => date('Y-m-d H:i:s'),
                'adresa' => [
                    'judet' => 'Iasi',
                    'localitate' => 'Iasi',
                    'cartier' => 'Nicolaina 2',
                    'strada' => '..',
                    'bloc' => '..',
                    'apartament' => '..',
                ],
                'password' => Hash::make('12345'),
            ],
        ];

        foreach ($doctors as $doctor) {
            $doctor = Doctor::create($doctor);
        }
    }
}
