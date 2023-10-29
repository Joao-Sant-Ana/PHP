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

    //String Built-in functions
    $string = "Hello, World!";
    echo strlen($string); //Tamanho da string
    echo "<br>";
    echo strpos($string, "He");//Localiza a posição de uma ou mais letras na string
    echo "<br>";
    echo str_replace("World", "João", $string);//Substuiu uma parte da string por outra desejada.
    echo "<br>";
    echo strtoupper($string);//Transforma tudo em maisucula. "strtolowercase" Transforma em minuscula
    echo "<br>";
    echo substr($string, 2, -2);
    echo "<br>";
    print_r(explode(" ", $string));//Divide a string em um array a partir da parte selecionada
    echo "<br>";

    //Numbers Built-in functions

    $number = 5;
    $float = -5.5;

    echo abs($float);// Tira qualquer sinal do numero
    echo "<br>";
    echo round($float);//Arredonda pra cima
    echo "<br>";
    echo pow(2, 3);//Potencia
    echo "<br>";
    echo round(sqrt($number));//Raiz quadrada
    echo "<br>";
    echo rand(1, 100);//Eslhe aleatoriamente um número.
    echo "<br>";

    //Array Built-in function

    $array = ["apple", "orange", "banana"];

    echo count($array);//Conta quantos elementos tem dentro do array.
    echo "<br>";
    echo is_array($array);//Verifica se é um array, funciona nos outros tipos
    
    ?>
</body>
</html>