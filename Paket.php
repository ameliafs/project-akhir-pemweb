<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nomor_resi',
        'pengirim',
        'penerima',
        'status',
        'diproses_di',
    ];
}
