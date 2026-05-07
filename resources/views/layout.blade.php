<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>

    <style>
        body{
            margin:0;
            font-family:Arial;
            background:#f5f5f5;
        }

        .container{
            padding:20px;
        }

        .grid{
            display:flex;
            flex-wrap:wrap;
            gap:20px;
        }
    </style>
</head>
<body>

@include('components.navbar')

<div class="container">
    @yield('content')
</div>

</body>
</html>