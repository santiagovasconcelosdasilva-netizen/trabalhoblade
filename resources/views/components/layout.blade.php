<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'Minha loja' }}</title>

    <style>
        body {
            margin: 0;
            font-family: Arial;
            background: #f5f5f5;
        }

        .container {
            padding: 20px;
        }

        .grid {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .contacto {
            max-width: 520px;
            margin: 40px auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        }

        .formulario {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .campo label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .campo input,
        .campo textarea {
            width: 100%;
            box-sizing: border-box;
            border: 1px solid #ccc;
            padding: 10px;
            border-radius: 5px;
        }

        .erro {
            color: #dc2626;
        }

        .sucesso {
            background: #d1fae5;
            color: #065f46;
            padding: 12px;
            border-radius: 5px;
        }

        .botao {
            background: blue;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    @include('components.navbar')

    <div class="container">
        {{ $slot }}
    </div>
</body>
</html>
