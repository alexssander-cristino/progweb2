<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;
use App\Models\Participante;
use PDF;

class DashboardController extends Controller
{
    public function index()
    {
        $eventos = Evento::withCount('participantes')->get();
        $participantes = Participante::all();

        return view('dashboard.index', [
            'totalEventos' => $eventos->count(),
            'totalParticipantes' => $participantes->count(),
            'eventos' => $eventos,
        ]);
    }

    public function exportPDF()
    {
        $eventos = Evento::withCount('participantes')->get();
        $pdf = PDF::loadView('dashboard.pdf', compact('eventos'));
        return $pdf->download('relatorio-dashboard.pdf');
    }
}