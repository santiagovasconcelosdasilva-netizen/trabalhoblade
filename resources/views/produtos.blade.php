@extends('layout')

@section('title', 'Produtos')

@section('content')

<h2>Todos os Produtos</h2>

<div class="grid">

    @for ($i = 1; $i <= 8; $i++)
        @include('components.card', [
            'nome' => 'Produto ' . $i,
            'preco' => rand(100, 900) . '€',
            'imagem' => 'https://images.unsplash.com/photo-1607853202273-797f1c22a38e'
        ])
    @endfor

</div>

@endsection


@extends('layout')

@section('title', 'Produto')

@section('content')

<div style="display:flex; gap:40px; background:white; padding:20px; border-radius:10px;">

    <img src="https://images.unsplash.com/photo-1607853202273-797f1c22a38e" 
    style="width:300px; border-radius:10px;">

    <div>
        <h1>PlayStation 5</h1>

        <p style="color:#e60023; font-size:24px;">549€</p>

        <p>Console de última geração com gráficos incríveis.</p>

        <button style="padding:15px; background:#e60023; color:white; border:none; border-radius:5px;">
            Comprar
        </button>
    </div>

</div>

@endsection