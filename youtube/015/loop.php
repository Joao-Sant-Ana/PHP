<?php 

    //for
    for($i = 0;$i <= 10;$i++) {
        echo "Esse é o looping de numero ". $i . "<br>";
    }


    echo "<br>";
    echo "<br>";
    echo "<br>";


    //While
    $bool = true;
    $a = 0;
    while ($bool) {
        $a++;
        
        echo "Esse é o looping de numero ". $a . "<br>";
        if ($a == 10) {
            $bool = false;
            echo "Fim do looping";
        }

    }


    echo "<br>";
    echo "<br>";
    echo "<br>";


    //Do while
    $bool = true;
    $a = 0;
    do {
        $a++;
        
        echo "Esse é o looping de numero ". $a . "<br>";
        if ($a == 10) {
            $bool = false;
            echo "Fim do looping";
        }
    } while($bool == true);


    echo "<br>";
    echo "<br>";
    echo "<br>";

    //foreach
    $carros = [
        "BMW",
        "Toyota",
        "Mercedees"
    ];

    foreach ($carros as $marca) {
        echo $marca . "<br>";
    }

    //foreach com array associativo

    $modelos = [
        "Toyota" => "Supra",
        "Porshe" => "911",
        "Volkswagen" => "Golf"
    ];

    echo "<br>";
    echo "<br>";
    echo "<br>";

    foreach ($modelos as $marca => $modelo) {
        echo $marca . " " . $modelo . "<br>";
    }