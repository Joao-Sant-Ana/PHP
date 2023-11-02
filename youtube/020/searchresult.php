<?php   
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $search = $_POST["search"];


        try {
            require_once "includes/dbh.inc.php";
                        //Prepare stetament
            $query = "SELECT usuarios.id, usuarios.username, usuarios.email, comments.comment_text,comments.created_at, comments.users_id FROM usuarios INNER JOIN comments ON usuarios.id = comments.users_id WHERE usuarios.username = ?";;
            $stmt = $pdo->prepare($query);
            $stmt->execute([$search]);
            //Fim do prepare stetament
            
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);//Pega todos os resultados

        } catch (PDOException $e) {
            die("Query failed: ". $e->getMessage());
        }
    } else {
        header("Location: index.php");
        echo "Erro";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>Results: </h3>
    <?php 
        if (empty($results)) {
            echo "<p>Error</p>";
        } else {
            foreach ($results as $row) {
                echo htmlspecialchars($row["username"]);
                echo "<br>";
                echo htmlspecialchars($row["comment_text"]);
                echo "<br>";
                echo htmlspecialchars($row["created_at"]);
            }
        }
    
    
    ?>
</body>
</html>