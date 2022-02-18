<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="banco/cadas.php" method="POST">
        <label for="">Nome:</label>
        <input type="text" name="name">

        <label for="">Sobrenome</label>
        <input type="text" name="sobrenome">

        <label for="">Email</label>
        <input type="e-mail" name="email">

        <label for="">Senha:</label>
        <input type="password" name="senha">
        <button>Cadastrar</button>
        <button><a href="login.php">Faça Login</a></button>
    </form>
</body>
</html>