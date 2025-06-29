<?php

// app/Models/Donation.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;

    // Campos preenchíveis
    protected $fillable = [
        'donor_name', // Nome do doador
        'amount',     // Valor da doação
        'date',       // Data da doação
    ];
}


