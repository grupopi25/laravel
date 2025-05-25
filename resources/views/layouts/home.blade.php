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
             <div class="logo">
               
                <img src="{{ asset('assets/logo-branco-1.png') }}" alt="">
            </div>
            <hr>

            <div class="box-icons">
                <a href="{{ route('adm.dashboard') }}" class="icons">
                    <i class="material-symbols-outlined">home</i>
                    <span>Home</span>
                </a>
            </div>

            <div class="box-icons">
                <a  href="{{ route('adm.clients') }}" class="icons ">
                    <i class="material-symbols-outlined">group</i>
                    <span>Clientes</span>
                </a>
            </div>

            <div class="box-icons">
                <a href="{{ route('adm.pets') }}" class="icons">
                    <i class="material-symbols-outlined">pets</i>
                    <span>Pets</span>
                </a>
            </div>

            <div class="box-icons">
                <a href="{{ route('adm.service') }}" class="icons">
                    <i class="material-symbols-outlined">concierge</i>
                    <span>Serviços</span>
                </a>
            </div>

            <div class="box-icons">
                <a  href="{{ route('adm.mensage') }}" class="icons">
                    <i class="material-symbols-outlined">mail</i>
                    <span>Mensagens</span>
                </a>
            </div>

            <div class="box-icons">
                <a  href="{{ route('adm.doctors') }}" class="icons">
                    <i class="material-symbols-outlined">stethoscope</i>
                    <span>Doutores</span>
                </a>
            </div>

            <div class="box-icons">
                <a  href="{{ route('adm.finance') }}" class="icons">
                    <i class="material-symbols-outlined">bar_chart</i>
                    <span>Finanças</span>
                </a>
            </div>

            <div class="box-icons logout">
                <a  href="#" class="icons">
                    <i class="material-symbols-outlined">logout</i>
                    <span>Sair</span>
                </a>
            </div>
        </header>
    </aside>
    <main class="main-content">
        <h1>Painel Administrativo</h1>
    </main>
    
      
    @yield('content')
      

    <script src="{{ asset('js/script.js') }}"></script>

</body>
</html>