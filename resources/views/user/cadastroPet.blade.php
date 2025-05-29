<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheets" href="{{ asset('css/user/cadPet.css') }}">
    <title>Cadastro Pet</title>
</head>
<body>
    <div class="containerPet">
<form action="">

         <h1>Cadastre seu Pet</h1>

        <div class="box-container">
         <input type="text" placeholder="Nome" name="name" required autocomplete="off" value="{{ old('name') }}">
        </div>
        <div class="box-container">
         <input type="text" placeholder="Raça" name="raça" required autocomplete="off" value="{{ old('raça') }}">
        </div>
        <div class="box-container">
         <input type="file" placeholder="Foto do pet" name="foto do pet" required  value="{{ old('foto do pet') }}">
        </div>
        <button type="submit" class="bnt-submit">
            Cadastrar o Pet
        </button>
</form>

    </div>

</body>
</html>
