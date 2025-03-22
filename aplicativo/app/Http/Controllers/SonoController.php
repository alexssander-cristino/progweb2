<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SonoController extends Controller
{
    public function index()
    {
        return view('sono_form'); // Exibe o formulário de avaliação do sono
    }

    public function avaliarSono(Request $request)
    {
        // Coleta a quantidade de horas dormidas
        $horas_sono = $request->input('horas_sono');

        // Avalia a qualidade do sono
        $qualidade = $this->avaliarQualidadeSono($horas_sono);

        // Passa as variáveis para a view
        return view('sono_resultado', compact('horas_sono', 'qualidade'));
    }

    private function avaliarQualidadeSono($horas_sono)
    {
        if ($horas_sono < 5) {
            return 'Sono Insuficiente';
        } elseif ($horas_sono >= 5 && $horas_sono <= 7) {
            return 'Sono Adequado';
        } else {
            return 'Sono Excessivo';
        }
    }
}

