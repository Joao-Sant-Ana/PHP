<?php 
    session_start();
    $_SESSION["username"] = "João";

    //unset($_SESSION["username"]); //Fecha apenas uma variavel de sessão
    session_unset();//Fecha todas as variaveis de sessão
    //session_destroy();//Faz a mesma coisa, porém não podera ver o resultado até mudar de página.
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        echo $_SESSION["username"]
    
    ?>
</body>
</html>