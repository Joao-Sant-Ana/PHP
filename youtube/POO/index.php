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
        require_once "Classes/Car.php";

        $car01 = new Car("Toyota", "Supra", "Vermelho");
        echo $car01->getCarInfo();
        echo "<br>";
        echo $car01->getBrand();
        echo "<br>";
        echo $car01->getColor();
        echo "<br>";
        echo $car01->setColor("Red");
        echo "<br>";
        echo $car01->getColor();
    ?>
</body>
</html>