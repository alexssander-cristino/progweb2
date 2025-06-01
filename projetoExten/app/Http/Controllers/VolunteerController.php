<?php

namespace App\Http\Controllers;

use App\Models\Volunteer;
use Illuminate\Http\Request;

class VolunteerController extends Controller
{
    // Exibe o formulário de cadastro de voluntário
    public function create()
    {
        return view('volunteers.create');
    }

    // Armazena os dados do voluntário no banco de dados
    public function store(Request $request)
    {
        // Validação dos dados
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:volunteers,email',
            'phone' => 'nullable|string|max:15',
            'skills' => 'nullable|string|max:255',
        ]);

        // Criação do novo voluntário
        Volunteer::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'skills' => $validated['skills'],
        ]);

        // Redireciona de volta com uma mensagem de sucesso
        return redirect()->route('volunteers.create')->with('success', 'Voluntário cadastrado com sucesso!');
    }

    // Exibe a lista de voluntários cadastrados
    public function index()
    {
        $volunteers = Volunteer::all();  // Recupera todos os voluntários
        return view('volunteers.index', compact('volunteers'));  // Passa os voluntários para a view
    }
}





