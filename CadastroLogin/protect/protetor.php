<?php

if(!isset($_SESSION)){
    session_start();
}

if(!isset($_SESSION['user_id'])){
    die("Você não pode acessar está página.<p><a href=\"login.php\">Entrar</a></p>");
}