<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Invitation extends Model
{
    use HasFactory;

    protected $table = 'invitations';

    protected $fillable = [
        'doctor_id',
        'code',
        'used',
        'expires_at',
    ];

    protected $casts = [
        'expires_at' => 'datetime',
    ];

    public function doctor(): BelongsTo 
    {
        return $this->belongsTo(Doctor::class, 'doctor_id');
    }
}
