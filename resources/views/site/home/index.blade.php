<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link rel="stylesheet" href="{{ asset('css/home/index.css') }}">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

    <title>@yield('title')</title>
</head>

<body>

    <div class="container">
        <aside>
            <div class="toggle">
                <div class="logo">
                    <img src="{{ asset('assets/logo-vermelho.png') }}" alt="Logo Clínica Veterinária" />
                    <h2>Clínica<span class="danger">Vet</span></h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">close</span>
                </div>
            </div>

            <div class="sidebar">
                <a href="" class="">
                    <span class="material-icons-sharp">dashboard</span>
                    <h3>Dashboard</h3>
                </a>

                <a href="">
                    <span class="material-icons-sharp">pets</span>
                    <h3>Cadastrar Pet</h3>
                </a>

                <a href="">
                    <span class="material-icons-sharp">person_outline</span>
                    <h3>Consultas</h3>
                </a>

                <a href="">
                    <span class="material-icons-sharp">mail_outline</span>
                    <h3>Mensagens</h3>
                    <span class="message-count">5</span>
                </a>

                <a href="">
                    <span class="material-icons-sharp">construction</span>
                    <h3>Serviços</h3>
                </a>

                <a href="#">
                    <span class="material-icons-sharp">event</span>
                    <h3>Agendamentos</h3>
                </a>

                <a href="#">
                    <span class="material-icons-sharp">medical_services</span>
                    <h3>Atendimentos</h3>
                </a>



                <a href="">
                    <span class="material-icons-sharp">attach_money</span>
                    <h3>Situação</h3>
                </a>

                <a href="#">
                    <span class="material-icons-sharp">about</span>
                    <h3>sobre</h3>
                </a>

                <a href="#">
                    <span class="material-icons-sharp">logout</span>
                    <h3>Logout</h3>
                </a>
            </div>
        </aside>
        <main class="main-content">
            @yield('content')

        </main>






        <script src="{{ asset('js/script.js') }}"></script>

</body>

</html>
