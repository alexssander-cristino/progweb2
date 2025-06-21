<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;

class EventoController extends Controller
{
    public function index(Request $request)
    {
        $eventos = Evento::when($request->search, function ($query, $search) {
            return $query->where('nome', 'like', "%{$search}%");
        })->get();

        return view('eventos.index', compact('eventos'));
    }

    public function create()
    {
        return view('eventos.create');
    }

    public function edit($id)
{
    $evento = Evento::findOrFail($id);
    return view('eventos.edit', compact('evento'));
}

public function update(Request $request, $id)
{
    $evento = Evento::findOrFail($id);

    $evento->nome = $request->nome;
    $evento->data = $request->data;
    $evento->local = $request->local;

    if ($request->hasFile('imagem')) {
        $evento->imagem = $request->file('imagem')->store('eventos', 'public');
    }

    $evento->save();

    return redirect()->route('eventos.index')->with('success', 'Evento atualizado com sucesso!');
}

public function destroy($id)
{
    $evento = Evento::findOrFail($id);

    // Deleta a imagem do storage se existir
    if ($evento->imagem) {
        \Storage::disk('public')->delete($evento->imagem);
    }

    $evento->delete();

    return redirect()->route('eventos.index')->with('success', 'Evento excluído com sucesso!');
}


    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'data' => 'required|date',
            'local' => 'required|string|max:255',
            'imagem' => 'nullable|image|max:2048',
        ]);

        $evento = new Evento();
        $evento->nome = $request->nome;
        $evento->data = $request->data;
        $evento->local = $request->local;

        if ($request->hasFile('imagem')) {
            $evento->imagem = $request->file('imagem')->store('eventos', 'public');
        }

        $evento->save();

        return redirect()->route('eventos.index')->with('success', 'Evento criado com sucesso!');
    }
}
