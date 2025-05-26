<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('css/admin/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/clientes.css') }}">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

    <title>@yield('title')</title>
</head>
<body>
<aside class="navbar-header">
        <header class="corpo">
            
        </header>
    </aside>
    <main class="main-content">
        <h1>Painel Administrativo</h1>
    </main>
    
    PRINCIPAL NAO MECHER
      
    @yield('content')
      

    <script src="{{ asset('js/script.js') }}"></script>

</body>
</html>