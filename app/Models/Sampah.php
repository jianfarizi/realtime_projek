<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sampah extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_pendaki',
        'type',
        'amount',
    ];

    public function pendakis()
    {
        return $this->belongsTo(Pendaki::class, 'id_pendaki');
    }
}
