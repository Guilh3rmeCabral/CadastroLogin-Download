<?php

$hostname = "localhost";
$dbname = "testemthdev";
$user = "root";
$password = "";

$conexao = new mysqli($hostname, $user, $password, $dbname);
if($conexao->connect_errno){
    echo "Teve erro ao conectar: (" . $conexao->connect_errno . ") " . $conexao->connect_error;
}