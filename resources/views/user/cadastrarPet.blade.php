@php
    use Illuminate\Support\Facades\Auth;
@endphp

<div class="container">
    <h1>Cadastrar Pet</h1>

    <p><strong>Usuário Logado:</strong> {{ Auth::user()->name }}</p>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $erro)
                    <li>{{ $erro }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('pets.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Nome</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Espécie</label>
            <input type="text" name="species" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Raça</label>
            <input type="text" name="breed" class="form-control">
        </div>

        <div class="mb-3">
            <label>Cor</label>
            <input type="text" name="color" class="form-control">
        </div>

        <div class="mb-3">
            <label>Sexo</label>
            <select name="gender" class="form-control">
                <option value="">Selecione</option>
                <option value="Macho">Macho</option>
                <option value="Fêmea">Fêmea</option>
            </select>
        </div>

        <div class="mb-3">
            <label>Data de Nascimento</label>
            <input type="date" name="birth_date" class="form-control">
        </div>

        <div class="mb-3">
            <label>Peso (kg)</label>
            <input type="number" name="weight" step="0.01" class="form-control">
        </div>

        <div class="mb-3">
            <label>Cliente (Dono)</label>
            <input type="text" class="form-control" value="{{ Auth::user()->name }}" disabled>
        </div>



        <button type="submit" class="btn btn-success">Cadastrar</button>
        <a href="{{ route('pets.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
