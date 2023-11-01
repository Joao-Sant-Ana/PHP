<?php
    //Boa prática deixar todas as constantes no topo do código.
    //Constante
    define("PI", 3.14);
    echo PI;

    //Importante dizer, constantes estão dentro do escopo global.

    function test() {
        return PI;
    }
    echo"<br>";
    echo test();


    $name = "João";
    $name = "André";
    echo $name;//Variavel

    echo "<br>";