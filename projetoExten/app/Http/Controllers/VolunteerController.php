<?php

namespace App\Http\Controllers;

use App\Models\Volunteer;
use Illuminate\Http\Request;

class VolunteerController extends Controller
{
    // Lista todos os voluntários e retorna a view index
    public function index()
    {
        $volunteers = Volunteer::all();
        return view('volunteers.index', compact('volunteers'));
    }

    // Mostra formulário para criar novo voluntário
    public function create()
    {
        return view('volunteers.create');
    }

    // Salva novo voluntário e redireciona para index
    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email|unique:volunteers,email',
            'phone' => 'nullable|string|max:20',
            'skills'=> 'nullable|string',
        ]);

        Volunteer::create($request->all());

        return redirect()->route('volunteers.index')->with('success', 'Voluntário cadastrado com sucesso!');
    }

    // Exibe um voluntário específico (view show)
    public function show($id)
    {
        $volunteer = Volunteer::findOrFail($id);
        return view('volunteers.show', compact('volunteer'));
    }

    // Mostra formulário para editar voluntário
    public function edit($id)
    {
        $volunteer = Volunteer::findOrFail($id);
        return view('volunteers.edit', compact('volunteer'));
    }

    // Atualiza dados do voluntário e redireciona para index
    public function update(Request $request, $id)
    {
        $volunteer = Volunteer::findOrFail($id);

        $request->validate([
            'name'  => 'required|string|max:255',
            'email' => "required|email|unique:volunteers,email,$id",
            'phone' => 'nullable|string|max:20',
            'skills'=> 'nullable|string',
        ]);

        $volunteer->update($request->all());

        return redirect()->route('volunteers.index')->with('success', 'Voluntário atualizado com sucesso!');
    }

    // Remove voluntário e redireciona para index
    public function destroy($id)
    {
        Volunteer::destroy($id);
        return redirect()->route('volunteers.index')->with('success', 'Voluntário deletado com sucesso!');
    }
}
