<?php

namespace Database\Seeders;

use App\Models\Pacient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PacientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pacients = [
            [
                'nume' => 'Sandu',
                'prenume' => 'Dragos',
                'email' => 'sandu@test.ro',
                'data_nasterii' => date('Y-m-d H:i:s'),
                'adresa' => [
                    'judet' => 'Iasi',
                    'localitate' => 'Iasi',
                    'cartier' => 'de fraieri',
                    'strada' => 'orientului nr ',
                    'bloc' => '..',
                    'apartament' => '..',
                ],
                'password' => Hash::make('12345'),
                'doctor_id' => 2,
                'istoric_medical_id' => 1,
            ],
            [
                'nume' => 'Scurtu',
                'prenume' => 'Alex',
                'email' => 'alex@test.ro',
                'data_nasterii' => date('Y-m-d H:i:s'),
                'adresa' => [
                    'judet' => 'Iasi',
                    'localitate' => 'Iasi',
                    'cartier' => 'de fraieri',
                    'strada' => 'orientului nr ',
                    'bloc' => '..',
                    'apartament' => '..',
                ],
                'password' => Hash::make('12345'),
                'doctor_id' => 2,
                'istoric_medical_id' => 2,
            ],
        ];

        foreach ($pacients as $pacient) {
            $pacient = Pacient::create($pacient);
        }
    }
}