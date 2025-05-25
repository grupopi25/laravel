@extends('layouts.home')

@section('title', 'Home')

@section('content')
    
    <main class="main-content">
      

        <!-- Cards de Informações -->
        <section class="cards-info">
            <div class="card">
                <span class="material-symbols-outlined">group</span>
                <h2>Clientes</h2>
                <p>{{ $totalClientes }}</p>
            </div>

            <div class="card">
                <span class="material-symbols-outlined">pets</span>
                <h2>Pets</h2>
                <p>215</p>
            </div>

            <div class="card">
                <span class="material-symbols-outlined">medical_services</span>
                <h2>Consultas Hoje</h2>
                <p>7</p>
            </div>

            <div class="card">
                <span class="material-symbols-outlined">bar_chart</span>
                <h2>Faturamento</h2>
                <p>R$ 4.500</p>
            </div>
            <div class="card">
                <span class="material-symbols-outlined">vaccines</span>
                <h2>Vacinas Pendentes</h2>
                <p>13</p>
            </div>
            <div class="card">
                <span class="material-symbols-outlined">room_service</span>
                <h2>Serviços</h2>
                <p>500</p>
            </div>
            <div class="card">
                <span class="material-symbols-outlined">payments</span>
                <h2>Pagamentos pendentes</h2>
                <p>R$ 4.500</p>
            </div>
        </section>


    </main>
@endsection
