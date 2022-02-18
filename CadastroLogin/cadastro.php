<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo/styles.css">
    <title>Tela de Cadastro | MTH Dev++</title>
</head>
<body>
    
    <div class="formulario-total">
        <div class="formulario">
            <img src="assents/logoCadastro.svg">
            <form action="banco/cadas.php" method="POST">
                <label for="">Nome</label>
                <input class="entrada-formulario" type="text" name="name" placeholder="Seu nome aqui..." required>
                <label for="">Sobrenome</label>
                <input class="entrada-formulario" type="text" name="sobrenome" placeholder="Seu sobrenome aqui..." required>
                <label for="">Email</label>
                <input class="entrada-formulario" type="e-mail" name="email" placeholder="Seu e-mail aqui..." required>
                <label for="">Senha</label>
                <input class="entrada-formulario" type="password" name="senha" placeholder="Sua senha aqui..." required>
                <div class="botao-total">
                    <button  class="botao"><a>Cadastrar</a></button>
                    <button  class="botao"><a href="login.php">Faça Login</a></button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>