<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Tela de Cadastro | MTH Dev++</title>
</head>
<body>
    <img src="assents/Logo.svg">
    <div class="form">
        <form action="banco/cadas.php" method="POST">
            <label for="">Nome</label>
            <input type="text" name="name" placeholder="Seu nome aqui..." required>

            <label for="">Sobrenome</label>
            <input type="text" name="sobrenome" placeholder="Seu sobrenome aqui..." required>

            <label for="">Email</label>
            <input type="e-mail" name="email" placeholder="Seu e-mail aqui..." required>

            <label for="">Senha</label>
            <input type="password" name="senha" placeholder="Sua senha aqui..." required>
            <div class="btn">
            <button><a href="login.php">Cadastrar</a></button>
            <button><a href="login.php">Faça Login</a></button>
              
        </form>
    </div>
</body>
</html>