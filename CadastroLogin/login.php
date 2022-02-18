<?php

include("banco/conexao.php");

if(isset($_POST['email']) || isset($_POST['senha'])){
    if(strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    }else if(strlen($_POST['senha']) == 0){
        echo "Preencha sua senha";
    }else{
        $email = mysqli_real_escape_string($conexao, $_POST['email']);
        $senha = mysqli_real_escape_string($conexao, $_POST['senha']);

        $codeSql = "SELECT * FROM user WHERE email = '$email' AND senha = '$senha'";
        $querySql = $conexao->query($codeSql) or die("Falaha na execução do código SQL ". $conexao->error);

        $qnt = $querySql->num_rows;

        if($qnt == 1){
            $user = $querySql->fetch_assoc();

            if(!isset($_SESSION)){
                session_start();
            }

            $_SESSION['user_id'] = $user['user_id'];
            $_SESSION['name'] = $user['name'];
            $_SESSION['email'] = $user['email'];

            header('Location: dashboard.php');
        }else{
            header('Location: login.php');
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Dashboard</title>
</head>
<body>
    <form action="login.php" method="POST">
    <label for="">Email</label>
        <input type="e-mail" name="email" placeholder="Seu email">

        <label for="">Senha:</label>
        <input type="password" name="senha" placeholder="Sua senha">
        <button><a href=""></a>Entrar</button>
        <button><a href="cadastro.php">Se cadastre</a></button>
    </form>
</body>
</html>