<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Programare extends Model
{
    use HasFactory;

    protected $table = 'programari';

    protected $fillable = [
        'doctor_id',
        'pacient_id',
        'data',
        'importanta',
        'description',
    ];

    protected $casts = [
        'data',
    ];

    public function doctor(): BelongsTo
    {
        return $this->belongsTo(Doctor::class, 'doctor_id');
    }

    public function pacient(): BelongsTo
    {
        return $this->belongsTo(Pacient::class, 'pacient_id');
    }
}
