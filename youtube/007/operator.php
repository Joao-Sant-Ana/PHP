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
        
        //String operator
        $a = "Hello,";
        $b = "Word!";
        $c = $a . " " .  $b;//"." serve como contatenação de strings.
        echo $c;

        echo "<br>";

        //Arithmetic operator
        echo 10 + 3;//Adição
        echo "<br>";
        echo 10 - 3;//Subtração
        echo "<br>";
        echo 10 / 3;//Divisão
        echo "<br>";
        echo 10 * 3;//Resto da divisão
        echo "<br>";
        echo 10 ** 3;//Potencia
        echo "<br>";

        //Assignment operators
        $x = 2;
        $x = $x + 2;//Má pratica
        $x += 4 //Boa prática

    ?>
</body>
</html>