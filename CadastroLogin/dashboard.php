<?php
  include("protect/protetor.php")  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    Seja bem vindo: 
    <?php
        echo "# " . $_SESSION['user_id'];
        echo $_SESSION['name'];
        echo $_SESSION['email'];
    ?>
    <ul>
    <?php
    
        foreach(glob("uploads/*.*") as $upload) {
            $name = basename($upload);
            echo '<li><a href="download.php?file='.$name.'">'.$name.'</a></li>';
        }
    ?>
    </ul>
    <button><a href="login.php">Sair</a></button>
</body>
</html>