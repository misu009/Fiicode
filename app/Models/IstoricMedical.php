<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class IstoricMedical extends Model
{
    use HasFactory;

    protected $table = 'istoric_medicals';

    protected $fillable = [
        'pacient_id',
        'alergii_si_intoleranta',
        'boli_cronice_si_diagnostice',
        'istoricul_de_boli_si_diagnostice',
        'interventii_si_procedee_efectuate',
        'servicii_medicale',
        'imunizari',
        'tratament_medicamentos',
    ];

    protected $casts = [
        'alergii_si_intoleranta' => 'array',
        'boli_cronice_si_diagnostice' => 'array',
        'istoricul_de_boli_si_diagnostice' => 'array',
        'interventii_si_procedee_efectuate' => 'array',
        'servicii_medicale' => 'array',
        'imunizari' => 'array',
        'tratament_medicamentos' => 'array',
    ];

    public function pacient(): BelongsTo
    {
        return $this->belongsTo(Pacient::class, 'pacient_id');
    } 
}
