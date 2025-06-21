<?php
// app/Models/Participante.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Participante extends Model
{
    protected $fillable = ['nome', 'email', 'telefone', 'evento_id'];

    public function evento()
    {
        return $this->belongsTo(Evento::class);
    }
}
