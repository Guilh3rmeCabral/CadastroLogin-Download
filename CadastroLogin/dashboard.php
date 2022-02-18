<?php
  include("protect/protetor.php")  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo/stylesboard.css">
    <title>Dashboard | MTH Dev++</title>
</head>
<body>
    <div class="cabeca">
        <img src="assents/logoDash.svg">
    </div>
    <div class="topo">
        <div class="informacoes">
            <div class="info-titulo"><h5>Usuário</h5></div>
            <ul class="secao-informacao">
                <li>
                    <?php
                        echo "Id: " . $_SESSION['user_id'];
                    ?>
                </li>
                <li>
                    <?php
                        echo "Nome: " . $_SESSION['name'];
                    ?>
                </li>
                <li>
                    <?php
                        echo "E-mail: " . $_SESSION['email'];
                    ?>
                </li>
            </ul>
        </div>
        <button class="botao-sair"><a href="login.php">Sair</a></button>
    </div>
    <div class="area-download">
        <h4>Arquivos disponíveis para<br>Download</h4>
        <ul class="arquivo">
                <?php
                    foreach(glob("uploads/*.*") as $upload) {
                        $name = basename($upload);
                        echo '<li><a href="download.php?file='.$name.'">'.$name.'</a></li>';
                    }
                ?>
        </ul>
    </div>
</body>
</html>