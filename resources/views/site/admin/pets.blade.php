@extends('layouts.admin')

@section('title', 'Pets')

@section('content')

<div class="container">
    
   

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Espécie</th>
                <th>Raça</th>
                <th>Cor</th>
                <th>Sexo</th>
                <th>Peso</th>
                <th>Data de Nascimento</th>
                <th>Cliente</th>
                <th>Cadastrado por</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pets as $pet)
            <tr>
                <td>{{ $pet->name }}</td>
                <td>{{ $pet->species }}</td>
                <td>{{ $pet->breed }}</td>
                <td>{{ $pet->color }}</td>
                <td>{{ $pet->gender }}</td>
                <td>{{ $pet->weight }} kg</td>
                <td>{{ $pet->birth_date ? date('d/m/Y', strtotime($pet->birth_date)) : '-' }}</td>
                <td>{{ $pet->client->name ?? 'Sem cliente' }}</td>
                <td>{{ $pet->user->name ?? 'Sem usuário' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>



    <div class="right-section">
        <div class="nav">
            <button id="menu-btn">
                <span class="material-icons-sharp">menu</span>
            </button>
            <div class="dark-mode">
                <span class="material-icons-sharp active">light_mode</span>
                <span class="material-icons-sharp">dark_mode</span>
            </div>
        </div>
    </div>

@endsection
