<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Diploma extends Model
{
    use HasFactory;

    protected $table = 'diploms';

    protected $fillable = [
        'doctor_id',
        'image',
    ];

    public function doctor(): BelongsTo {
        return $this->belongsTo(Doctor::class, 'doctor_id');
    }
}
