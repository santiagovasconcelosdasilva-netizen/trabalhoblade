@extends('layout')

@section('title', 'Contacto')

@section('content')

<div style="max-width:520px; margin:40px auto; background:white; padding:25px; border-radius:10px; box-shadow:0 2px 8px rgba(0,0,0,0.08);">
    <h2 style="margin-top:0;">Formulario de Contacto</h2>

    @if (session('sucesso'))
        <p style="background:#d1fae5; color:#065f46; padding:12px; border-radius:5px;">
            {{ session('sucesso') }}
        </p>
    @endif

    <form action="/contacto" method="POST" style="display:flex; flex-direction:column; gap:15px;">
        @csrf

        <div>
            <label for="nome" style="display:block; margin-bottom:5px; font-weight:bold;">Nome</label>
            <input type="text" id="nome" name="nome" value="{{ old('nome') }}" style="width:100%; box-sizing:border-box; border:1px solid #ccc; padding:10px; border-radius:5px;">
            @error('nome')
                <small style="color:#dc2626;">{{ $message }}</small>
            @enderror
        </div>

        <div>
            <label for="email" style="display:block; margin-bottom:5px; font-weight:bold;">Email</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" style="width:100%; box-sizing:border-box; border:1px solid #ccc; padding:10px; border-radius:5px;">
            @error('email')
                <small style="color:#dc2626;">{{ $message }}</small>
            @enderror
        </div>

        <div>
            <label for="assunto" style="display:block; margin-bottom:5px; font-weight:bold;">Assunto</label>
            <input type="text" id="assunto" name="assunto" value="{{ old('assunto') }}" style="width:100%; box-sizing:border-box; border:1px solid #ccc; padding:10px; border-radius:5px;">
            @error('assunto')
                <small style="color:#dc2626;">{{ $message }}</small>
            @enderror
        </div>

        <div>
            <label for="mensagem" style="display:block; margin-bottom:5px; font-weight:bold;">Mensagem</label>
            <textarea id="mensagem" name="mensagem" rows="5" style="width:100%; box-sizing:border-box; border:1px solid #ccc; padding:10px; border-radius:5px; resize:vertical;">{{ old('mensagem') }}</textarea>
            @error('mensagem')
                <small style="color:#dc2626;">{{ $message }}</small>
            @enderror
        </div>

        <button type="submit" style="background:blue; color:white; border:none; padding:12px; border-radius:5px; cursor:pointer;">
            Enviar
        </button>
    </form>
</div>

@endsection
