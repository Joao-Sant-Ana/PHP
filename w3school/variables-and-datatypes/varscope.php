<?php

    //O escopo global, funciona apenas em areas gerais de um arquivo, porem, não funciona nas funções.
    //Variaveis de funções são chamadas de locais, e funcionam apenas dentro de funções.
    /*
    $x = 5;//Escopo global
    function message () {
        echo "<p>$x</p>";// A variavel não pode ser acessada dentro da função.
    }
    message();

    echo "<p>$x</p>";//A variavel será acessada aqui.
    */

    /*
    function newMessage() {
        $y = 10;//Escopo local
        echo "<p>$y</p>";//Neste caso a variavel será chamada dentro da função e somente aqui.

        //Importante dizer que ao fim da função a variavel é completamente deletada.
    }
    newMessage();

    echo "<p>$y</p>";
    */

    $a = 20;//Escopo global.

    function newerMessage() {
        global $a;
        echo "<p>$a</p>";
    }

    newerMessage();

    //O PHP guarda variaveis em um array chamado $GLOBALS[] então podemos chamar as variaveis dentro de funções deste modo.

    $b = 10;
    $c = 5;
    function showGlobals() {
        $GLOBALS['c'] = $GLOBALS['b'] + $GLOBALS['c'];
    }
    showGlobals();

    echo "<p>$c</p>";

    //Algumas vezes não queremos que nossas variaveis locais sejam deletadas após o fim da função, então usamos o static, que mantém a variavel viva.

    function staticVar() {
        static $k = 20;
        echo $k;
        $k++;
    }

    staticVar();
    staticVar();
    staticVar();
?>