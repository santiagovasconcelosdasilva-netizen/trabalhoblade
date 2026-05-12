<x-layout title="Contacto">
<div class="contacto">
    <h2>Formulario de Contacto</h2>

    @if (session('sucesso'))
        <p class="sucesso">{{ session('sucesso') }}</p>
    @endif

    <form action="/contacto" method="POST" class="formulario">
        @csrf

        @foreach (['nome' => 'Nome', 'email' => 'Email', 'assunto' => 'Assunto', 'telefone' => 'Telefone'] as $campo => $label)
            <div class="campo">
                <label for="{{ $campo }}">{{ $label }}</label>
                <input type="{{ $campo === 'email' ? 'email' : 'text' }}" id="{{ $campo }}" name="{{ $campo }}" value="{{ old($campo) }}">
                @error($campo)
                    <small class="erro">{{ $mensage }}</small>
                @enderror
            </div>
        @endforeach

        <div class="campo">
            <label for="mensagem">Mensagem</label>
            <textarea id="mensagem" name="mensagem" rows="5">{{ old('mensagem') }}</textarea>
            @error('mensagem')
                <small class="erro">{{ $mensage }}</small>
            @enderror
        </div>

        <button type="submit" class="botao">Enviar</button>
    </form>
</div>
</x-layout>
