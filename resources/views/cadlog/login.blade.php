<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/cadlog/cadastroUser.css') }}">
    <title>Login</title>
</head>
<body>
<div class="containner login">
      <form>

        <h1>
            Login
        </h1>
        <div class="box-containner">
            <input type="text" placeholder="Email" required>
            <img width="20" height="20" src="https://img.icons8.com/ios-filled/50/ffffff/user--v1.png" alt="user"/>
        </div>

        <div class="box-containner">
            <input type="password" placeholder="Senha" required>
         <img width="20" height="20" src="https://img.icons8.com/material/24/ffffff/lock--v1.png" alt="lock"/>
         <a href="#">Esqueci minha senha</a>
        </div>

        <button type="submit" class="btn-submit">Enviar</button>

        <div class="register">
            <p>
                Não está cadastrado  ? <a href="{{ route('cadastro') }}">Cadastrar</a>
            </p>
        </div>

      </form>

</div>

</body>
</html>
