<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        echo $_SERVER['DOCUMENT_ROOT'];
        echo "<br>";
        echo $_SERVER['PHP_SELF'];
        echo "<br>";
        echo $_SERVER['SERVER_NAME'];
        echo "<br>";
        echo $_SERVER['REQUEST_METHOD'];
        echo "<br>";
        echo $_GET['name'];//Aparece na URL menos seguro.
        echo "<br>";
        echo $_POST['name'];//Não aparece na URL.
        echo "<br>";
        echo $_REQUEST['name'];//Junção do GET, POST, COOKIES e outras.
        echo "<br>";
        $_SESSION['username'] = "João Marcos";
        echo $_SESSION['username'];

        $_SERVER[''];
        $_GET[''];
        $_POST[''];
        $_REQUEST[''];
        $_COOKIES[''];
        $_FILES[''];
        $_SESSION[''];
        $_ENV[''];

    ?>
</body>
</html>