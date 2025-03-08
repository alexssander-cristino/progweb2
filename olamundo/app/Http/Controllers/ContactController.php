<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;  // Vamos criar esse Mailable

class ContactController extends Controller
{
    // Exibe o formulário de contato
    public function showForm()
    {
        return view('contact');
    }

    // Processa o envio do formulário
    public function submitForm(Request $request)
    {
        // Validação do formulário
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'message' => 'required|min:10',
        ]);

        // Dados para enviar no e-mail
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
        ];

        // Enviar o e-mail usando o Mailable que vamos criar
        Mail::to('alexssander.cristino@unidavi.edu.br') // Aqui é para quem o e-mail será enviado
            ->send(new ContactMail($data));

        // Retornar com mensagem de sucesso
        return back()->with('success', 'Mensagem enviada com sucesso!');
    }
}


?>