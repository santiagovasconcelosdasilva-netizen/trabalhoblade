<?php
namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;

class ConctatoController extends Controller
{
    public function store(Request $request)
    { 
        //Validaçâo dos dados do formulário
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'assunto' => 'required|string|max:255',
            'mensagem' => 'required|string|max:2000',
        ]);
    }

    //Criaçâo de um novo contacto e gravação na base de dados
    $contacto = new Contacto();
    $contacto->nome = $request->input('nome');
    $contacto->email = $request->input('email');
    $contacto->assunto = $request->input('assunto');
    $contacto->mensagem = $request->input('mensagem');
    $contacto->save();

    //Redireciona o usuário de volta para a página de contacto com uma mensagem de sucesso
    return redirect()->back()->with('sucesso', 'Mensagem enviada com sucesso!');
}