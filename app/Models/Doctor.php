<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Doctor extends Model
{
    use HasFactory;

    protected $table = 'doctors';

    protected $fillable = [
        'nume',
        'prenume',
        'email',
        'diploma_id',
        'password',
        'date_time',
        'adresa',
    ];

    protected $hidden = [
        'password',
    ];
    
    protected $casts = [
        'data_nasterii' => 'datetime',
        'adresa' => 'array',
    ];

    public function diploms(): HasMany
    {
        return $this->hasMany(Diploma::class, 'diploma_id');
    }

    public function invitatii(): HasMany
    {
        return $this->hasMany(Invitation::class);
    }

    public function pacients(): HasMany
    {
        return $this->hasMany(Pacient::class);
    }

    public function programari(): HasMany
    {
        return $this->hasMany(Programare::class);
    }
}