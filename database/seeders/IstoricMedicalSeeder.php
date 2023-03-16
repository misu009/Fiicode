<?php

namespace Database\Seeders;

use App\Models\IstoricMedical;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IstoricMedicalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $istoric_medicals = [
            [
                'pacient_id' => 2,
                'alergii_si_intoleranta' => 'la bani',
                'boli_cronice_si_diagnostice' => 'impotenta :(',
                'istoricul_de_boli_si_diagnostice' => 'doar impotenta..',
                'interventii_si_procedee_efectuate' => 'operatie pe creier pentru a-i gasi neuronii',
                'servicii_medicale' => 'de unde bani nenicule..',
                'imunizari' => 'imun la tot ce inseamna inteligenta si creier',
                'tratament_medicamentos' => 'nu s a descoperit leac',
            ],
            [
                'pacient_id' => 1,
                'alergii_si_intoleranta' => fake()->text(),
                'boli_cronice_si_diagnostice' => fake()->text(),
                'istoricul_de_boli_si_diagnostice' => fake()->text(),
                'interventii_si_procedee_efectuate' => fake()->text(),
                'servicii_medicale' => fake()->text(),
                'imunizari' => fake()->text(),
                'tratament_medicamentos' => fake()->text(),
            ],
        ];
        foreach ($istoric_medicals as $istoric_medical) {
            $istoric_medical = IstoricMedical::create($istoric_medical);
        }
    }
}
