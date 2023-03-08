<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pdf extends Model
{
    use HasFactory;

    protected $table = 'pdf';

    protected $fillable = [
        'pacient_id',
        'pdf',
    ];

    public function pacient(): BelongsTo 
    {
        return $this->belongsTo(Pacient::class, 'pacient_id');
    }
}
