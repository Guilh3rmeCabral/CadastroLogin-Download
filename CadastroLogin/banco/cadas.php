<?php

    include("conexao.php");

    $name=$_POST['name'];
    $sobrenome=$_POST['sobrenome'];
    $email=$_POST['email'];
    $senha=$_POST['senha'];

    $sql = "INSERT INTO user(name, sobrenome, email, senha) 
        VALUES ('$name', '$sobrenome', '$email', '$senha')";

    if(mysqli_query($conexao, $sql)){
        header('Location: ../login.php');
    }
    else {
        echo "Erro".mysqli_error($conexao);
    }
    mysqli_close($conexao);
    