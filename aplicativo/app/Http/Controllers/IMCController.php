<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IMCController extends Controller
{
    public function index()
    {
        // Retorna a view do formulário
        return view('imc_form');
    }

    public function calcularIMC(Request $request)
    {
        // Coleta os dados do formulário
        $nome = $request->input('nome');
        $peso = $request->input('peso');
        $altura = $request->input('altura');

        // Cálculo do IMC
        $imc = $peso / ($altura * $altura);

        // Classificação do IMC
        $classificacao = $this->classificarIMC($imc);

        // Retorna a view de resultado com os dados calculados
        return view('imc_resultado', compact('nome', 'peso', 'altura', 'imc', 'classificacao'));
    }

    private function classificarIMC($imc)
    {
        if ($imc < 18.5) {
            return 'Abaixo do Peso';
        } elseif ($imc >= 18.5 && $imc < 24.9) {
            return 'Peso Normal';
        } elseif ($imc >= 25 && $imc < 29.9) {
            return 'Sobrepeso';
        } else {
            return 'Obesidade';
        }
    }
}

