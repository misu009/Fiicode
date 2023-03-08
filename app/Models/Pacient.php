<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Pacient extends Model
{
    use HasFactory;

    protected $table = 'pacients';

    protected $fillable = [
        'nume',
        'prenume',
        'email',
        'adresa',
        'doctor_id',
        'istoric_medical_id',
        'password',
        'data_nasterii',
    ];

    protected $hidden = [
        'password',
    ];

    protected $casts = [
        'data_nasterii' => 'datetime',
        'adresa' => 'array',
    ];

    public function istoric_medical(): HasOne
    {
        return $this->hasOne(IstoricMedical::class, 'istoric_medical_id');
    }

    public function doctor(): BelongsTo
    {
        return $this->belongsTo(Doctor::class, 'doctor_id');
    }

    public function pdfs(): HasMany
    {
        return $this->hasMany(Pdf::class);
    }

    public function programari(): HasMany
    {
        return $this->hasMany(Programare::class);
    }
}
