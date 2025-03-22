<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViagemController extends Controller
{
    public function index()
    {
        return view('viagem_form'); // Retorna o formulário de cálculo de gasto de viagem
    }

    public function calcularGasto(Request $request)
    {
        // Coleta os dados fornecidos pelo usuário
        $distancia = $request->input('distancia');
        $preco_combustivel = $request->input('preco_combustivel');
        $consumo_carro = $request->input('consumo_carro');

        // Verifica se os dados fornecidos são válidos
        if ($distancia <= 0 || $preco_combustivel <= 0 || $consumo_carro <= 0) {
            // Retorna um erro se algum dos dados for inválido
            return redirect()->route('viagem.form')->withErrors('Por favor, insira valores válidos para todos os campos.');
        }

        // Cálculo do gasto total (Distância / Consumo do Carro) * Preço do Combustível
        $gasto_total = ($distancia / $consumo_carro) * $preco_combustivel;

        // Retorna a view de resultado, passando as variáveis
        return view('viagem_resultado', compact('distancia', 'preco_combustivel', 'consumo_carro', 'gasto_total'));
    }
}
