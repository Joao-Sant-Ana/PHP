<?php 
    declare(strict_types = 1);//Força a checagem de tipo quando declarada.

    function sayHello(string $name = "João") {//Se não houver um parametro na chamada, ele chamara o valor default, caso ele exista na função. Caso tenha um valor na chamada, ele usará o da chamada e ingorara o valor default.
        return "Hello, ". $name;
    }
    $test = sayHello("Marcos");
    echo $test;
    echo "<br>";

    function calc(int $num1, int $num2) {
        $result = $num1 + $num2;
        return $result;
    }

    $calc = calc(2, 3);
    echo $calc;
    echo "<br>";

    //Escopo basico
    $myName = "João";

    function test() {
        global $myName;
        return $myName;
    }

    $func = test();
    echo $func;
?>