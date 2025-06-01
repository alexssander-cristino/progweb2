<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    // Exibe o formulário de criação de doação
    public function create()
    {
        return view('donations.create');
    }

    public function index()
{
    $donations = Donation::all();  // Recupera todas as doações
    return view('donations.index', compact('donations'));  // Passa para a view
}

    // Armazena a doação no banco de dados
    public function store(Request $request)
    {
        // Validação dos dados do formulário
        $validated = $request->validate([
            'donor_name' => 'required|string|max:255',
            'amount' => 'required|numeric|min:0.01',
            'date' => 'required|date',
        ]);

        // Criação e salvamento da doação no banco
        $donation = new Donation();
        $donation->donor_name = $validated['donor_name'];
        $donation->amount = $validated['amount'];
        $donation->date = $validated['date'];
        $donation->save();

        // Redireciona de volta para o formulário de criação com uma mensagem de sucesso
        return redirect()->route('donations.create')->with('success', 'Doação registrada com sucesso!');
    }
}


