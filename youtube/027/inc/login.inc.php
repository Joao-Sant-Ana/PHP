<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        require_once "verifypwd.inc.php";
        $email = $_POST["email"];
        $pwd = $_POST["password"];

        try {
            require_once "dbh.inc.php";

            if ($verification) {
                echo "Deu certo";
            } else {
                echo "Deu errado";
            }

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