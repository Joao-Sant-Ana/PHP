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

    $fruits = array("Apple", "Banana", "Orange", "Pear");
    $cars = ["BMW", "Mercedes", "Volkswagen", "Toyota"];



    $cars[] = "Nissan" ;

    echo $cars[4];

    //unset($cars[4]); // "Deleta" um parametro do array
    array_splice($cars, 4);// Deleta por total um item do array

    echo $cars[4];//Erro proposital

    array_push($cars, "Puma");//Não funciona com array associativo
    echo "<br>";
    echo $cars[4];
    echo "<br>";

    array_splice($cars, 2, 0, "Porshe");
    print_r($cars);
    echo "<br>";
    sort($cars);//Ordem alfabetica
    print_r($cars);
    echo "<br>";
    $tasks = [// <= isto é um array associativo.
        "lixo" => "João",
        "louca" => "André",
        "nada" => "Matheus"
    ];

    echo $tasks["lixo"];
    echo "<br>";
    print_r($tasks);
    echo "<br>";
    echo count($tasks);
    echo "<br>";

    sort($tasks);
    print_r($tasks);
    echo "<br>";

    $tasks["almoco"] = "Mãe";//Adicona um elemento a um array asiciativo

    print_r($tasks);
    echo "<br>";

    //Multidimensional Comuns

    $countrys = [
        array("Brasil", "Argentina"),
        array("França", "Rússia")
    ];

    echo $countrys[0][0];
    echo "<br>";

    //Multidimensional Associativo
    $carModels = [//Pode escalar para mais
        "Volkswagen" => array("Gol", "Gold", "Passat"),
        "Nissan" => array("Skyline", "March", "Sentra"),
        "Toyota" => array("Supra", "Yaris", "Corolla")
    ];

    print_r($carModels);
    echo "<br>";
    echo $carModels["Toyota"][0];

    ?>

</body>
</html>