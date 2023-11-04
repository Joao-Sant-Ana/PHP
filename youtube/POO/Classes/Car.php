<?php 

    //Class = template

    class Car 
    {
        //Properties e methods são coisas similares a variaveis e funções, não iguais, similares.

        //"Public" todo mundo tem acesso.
        //"Protected" permite classes filhas acessarem.
        //"Private" apenas essa classe pode acessar.


        //Properties / Fields.
        private $brand;
        private $color;
        private $model;

        /*
            Para uma boa prática defina tudo como "private" 
            e depois ir alterando para "public" ou "protected".
        */

        //Constructor
        public function __construct($brand, $model, $color = "Black")
        {
            $this->brand = $brand; //O this aponta para uma propriedade no objeto, neste caso, o "brand" seria a propriedade no inicio da classe e o "$brand" o placeholder.
            $this->color = $color;
            $this->model = $model;
        }

        //Getter and Setter method
        //Muda a propriedade ou pega a propriedade se ela for privada

        public function getBrand() {
            return $this->brand;
        }

        public function setBrand($brand) {
            return $this->brand = $brand;
        }
        public function getColor() {
            return $this->color;
        }

        public function setColor($color) {
            $allowedColors = [
                "Yelloy",
                "Blue",
                "Red"
            ];

            if (in_array($color, $allowedColors)) {
                return $this->brand = $color;
            }
        }

        //Method
        public function getCarInfo () 
        {
            return "Brand: " . $this->brand . " Model: " . $this->model . " Color: " . $this->color . ".";
        }
    }


    //Cria um objeto baseado na class.
    //$car01 = new Car("Toyota", "Supra", "Vermelho");
