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
<div class="containner">
      <form>

        <h1>
            Cadastra-se
        </h1>
        <div class="box-containner">
            <input type="text" placeholder="Nome" required>
        </div>
        <div class="box-containner">
            <input type="email" placeholder="Email" required>
        </div>
        <div class="box-containner">
            <input type="password" placeholder="Senha" required>
            <input type="checkbox" id="check"><span id="termo">Politica de Privacidade</span>
        </div>


        <button type="submit" class="btn-submit">Enviar</button>



      </form>

</div>

</body>
</html>
