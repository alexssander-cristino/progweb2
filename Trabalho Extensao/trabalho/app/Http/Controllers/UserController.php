<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Exibe o formulário de cadastro
    public function create()
    {
        return view('users.create');
    }

    // Armazena os dados do usuário no banco de dados
    public function store(Request $request)
    {
        // Validação dos dados
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
        ]);

        // Criação do novo usuário
        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']), // Criptografa a senha
        ]);

        // Redireciona de volta com uma mensagem de sucesso
        return redirect()->route('users.create')->with('success', 'Usuário cadastrado com sucesso!');
    }

    // Exibe a lista de usuários cadastrados
    public function index()
    {
        $users = User::all();  // Recupera todos os usuários
        return view('users.index', compact('users'));  // Passa os usuários para a view
    }
}
