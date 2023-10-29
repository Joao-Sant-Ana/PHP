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
        $bool = true;

        if ($bool) {
            echo "true";
        } else {
            echo "false";
        }
        
        $a = "3";
        echo "<br>";

        switch($a) {
            case 1:
                echo "Yes";
                break;
            case 2: {
                echo "Correct";
                break;
            }
            default:
                echo "default";
                break;
        }

        $result = match($a) {
            1 => "Var a é igual a 1 ",
            2, 3, 4  => "Var a é igual a 2 ",
            default => "Nenhum funciona",
        };

        echo "<br>";
        echo $result;

        ?>
</body>
</html>