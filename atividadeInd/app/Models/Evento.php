<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $fillable = ['nome', 'data', 'local', 'imagem'];

    public function participantes()
    {
        return $this->hasMany(Participante::class);
    }
}
