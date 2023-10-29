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
        //Para saber mais sobre as variaveis vá em "/./w3school/variables-and-datatypes/index.php" 

        //Scalar types (Contém apenas um valor)
        $name = "João Marcos";//String
        $numberInt = 10;//NumberInt
        $numberFloat = 1.23;//NumberFloat/double
        $bool = true;//Boolean

        //Para deixar variaveis vazias, ou seja == null, deve-se sempre deixar algum valor dentro dela Ex:
        $nameNull = "";//Boa prática
        //Entretanto, pode-se criar dessa forma também:
        $nameNull2;//Comum

        //Array type
        $names = array("Joao", "pedro");
        $names2 = ["joao", "pedro"];//Array podem ser criados de duas formas.
        $object = null; //Para objetos que ainda nãor receberam nada.

    ?>
</body>
</html>