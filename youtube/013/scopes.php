<?php
    $globalVar = "João";//Global
    
    function myFunction () {
        global $globalVar;//Agora a variavel se torna acessivel na função.

        $localVar = "Olá, mundo!";//Variavel local
        //return $localVar;

        return $globalVar;//Não consegue retornar a global, pois ela não tem acesso aqui.
        //return $GLOBALS['$globalVar'] // Retorna a função normalmente sem precisar declarar a variavel global.
    }

    echo myFunction();


    echo "<br>";

    //Funções estáticas
    function otherFunction() {
        static $staticVar = 0;//Com o "Static" a variavel se mantem "viva" após o fim da função.

        $staticVar++;

        return $staticVar;
    }

    echo otherFunction();
    echo "<br>";
    echo otherFunction();




    //Exemplo com classes
    class MyClass 
    {
        //Define uma variavel da classe
        public $classVar = "Olá, mundo!";

        //Define o metodo da classe
        public function myMethod()
        {
            //Usa a variavel da classe
            echo $this->classVar;
        }
    }