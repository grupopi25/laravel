<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/cadlog/cadastroUser.css') }}">
    <title>Cadastro</title>
</head>
<body>

<div class="container">
    <form>
        <h1>Cadastre-se</h1>

        <div class="box-container">
            <input type="text" placeholder="Nome" required autocomplete="off">
        </div>

        <div class="box-container">
            <input type="email" placeholder="Email" required autocomplete="off">
        </div>

        <div class="box-container">
            <input type="password" placeholder="Senha" required autocomplete="off">
        </div>

        <div class="box-container">
            <input type="checkbox" id="check" required>
            <label for="check" id="termo">Política de Privacidade</label>
        </div>

        <button type="submit" class="btn-submit">Enviar</button>
    </form>
</div>

</body>
</html>
