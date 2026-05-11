<?php

use App\Models\Contacto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('bemvindo');
});

Route::get('/produtos', function () {
    return view('produtos');
});

Route::get('/produto', function () {
    return view('produto');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::post('/contacto', function (Request $request) {
    $dados = $request->validate([
        'nome' => ['required', 'string', 'max:255'],
        'email' => ['required', 'email', 'max:255'],
        'assunto' => ['required', 'string', 'max:255'],
        'mensagem' => ['required', 'string', 'max:2000'],
    ]);

    Contacto::create($dados);

    return redirect('/contacto')->with('sucesso', 'Mensagem enviada com sucesso!');
});
