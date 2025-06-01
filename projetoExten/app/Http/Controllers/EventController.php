<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    // Método para exibir a lista de eventos
    public function index()
    {
        // Recupera todos os eventos do banco de dados
        $eventos = Event::all();
        
        // Verifique se os eventos estão sendo passados para a view
        \Log::info('Eventos: ', $eventos->toArray());

        // Retorna a view com os eventos
        return view('events.index', compact('eventos'));
    }

    // Método para exibir o formulário de criação de evento
    public function create()
    {
        return view('events.create');
    }

    // Método para armazenar um novo evento no banco de dados
    public function store(Request $request)
    {
        // Validação dos dados recebidos
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'nullable|string',
            'local' => 'nullable|string|max:255',
            'data_evento' => 'nullable|date',
        ]);

        // Criar e salvar o evento no banco de dados
        Event::create($validated);

        // Redirecionar para a lista de eventos com uma mensagem de sucesso
        return redirect()->route('events.index')->with('sucesso', 'Evento criado com sucesso!');
    }
}
