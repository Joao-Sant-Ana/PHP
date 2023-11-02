<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require_once "pwdhash.inc.php";

        $pwd = $hashPwd;
        $username = $_POST["username"];
        $email = $_POST["email"];

        try {
            require_once "dbh.inc.php";

            //Prepare stetament
            $query = "INSERT INTO usuarios (username, pwd, email) VALUES (?, ?, ?);";
            $stmt = $pdo->prepare($query);
            $stmt->execute([$username, $pwd, $email]);
            //Fim do prepare stetament

            $pdo = null;
            $stmt = null;
            header("Location:../index.php");

            die();
            /* Não seguro
            $query = "INSERT INTO usuarios (username, pwd, email) VALUES ($username, $password, $email);";
            */
        } catch (PDOException $e) {
            die("Query failed: ". $e->getMessage());
        }
    } else {
        header("Location:../index.php");
    }