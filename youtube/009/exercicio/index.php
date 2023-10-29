<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <input type="number" name="num1" placeholder="Number one" step="any">
        <select name="operator">
            <option value="+">Sum</option>
            <option value="-">Sub</option>
            <option value="*">Mult</option>
            <option value="/">Div</option>
            <option value="%">Div Rest</option>
            <option value="**">Potence</option>
        </select>

        <input type="number" placeholder="Number 2" name="num2" step="any">
        <input type="submit" value="Enviar">

    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $num1 = filter_input(INPUT_POST, 'num1', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
        $operator = htmlspecialchars($_POST['operator']);
        $num2 = filter_input(INPUT_POST, 'num2', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

        //Error handlers
        //Verifica se algum campo ficou em branco
        $errors = false;
        if (empty($num1) || empty($num2)) {
            echo "<script>alert('Preencha todos os campos')</script>";
            $errors = true;
        }

        //Verifica se algum campo há qualquer coisa alem de numeros
        if(!is_numeric($num1) || !is_numeric($num2)) {
            echo "<script>alert('Use números')</script>";
            $errors = true;
        }
        if ($errors == false) {
            $result;
            switch($operator) {
                case "+":
                    $result = $num1 + $num2;
                    echo $result;
                    break;
                case "-":
                    $result = $num1 - $num2;
                    echo $result;
                    break;
                case "*":
                    $result = $num1 * $num2;
                    echo $result;
                    break;
                case "/":
                    $result = $num1 / $num2;
                    echo $result;
                    break;
            
                case "%": 
                    $result = $num1 % $num2;
                    echo $result;
                    break;
                case "**":
                    $result = $num1 ** $num2;
                    echo $result;
                    break;
            }
        }

    }
            
    ?>
</body>
</html>