<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Participante;
use App\Models\Evento;

class ParticipanteController extends Controller
{
    public function index(Request $request)
    {
        $participantes = Participante::with('evento')
            ->when($request->search, function ($query, $search) {
                return $query->where('nome', 'like', "%{$search}%");
            })->get();

        return view('participantes.index', compact('participantes'));
    }

    public function create()
    {
        $eventos = Evento::all();
        return view('participantes.create', compact('eventos'));
    }
    

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telefone' => 'required|string|max:20',
            'evento_id' => 'required|exists:eventos,id',
        ]);

        Participante::create($request->all());

        return redirect()->route('participantes.index')->with('success', 'Participante criado com sucesso!');
    }

    
}
