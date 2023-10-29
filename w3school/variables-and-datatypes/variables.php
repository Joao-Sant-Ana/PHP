<?php
    $txt = "Olá mundo"; //Essa é uma string
    $intNumber = 10;//Esse é um número(interger)
    $floatNumber = 10.5;//Esse é um número não inteiro(float ou double)
    $nomes = array("João", "AP", "Gabriel");//Esse é um array de strings
    $verdadeiro = true;//Várivael booleana

    //Objeto
    class Car
    {
        public $color;
        public $model;
        public function __construct($color, $model) 
        {
            $this->color = $color;
            $this->model = $model;
        }
        public function message() 
        {
            return "My car is a " . $this->color. " " . $this->model . "!";
        }
    }

    $myCar = new Car("black", "Mercedes");
    echo $myCar -> message();
    echo "<br>";
    $myCar = new Car("red", "Toyota");
    echo $myCar -> message();

?>