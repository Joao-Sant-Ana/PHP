<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $password = $_POST["password"];
        $email = $_POST["email"];

        try {
            require_once "dbh.inc.php";

            //Prepare stetament
            $query = "DELETE FROM usuarios WHERE email = ? AND pwd = ?;";
            $stmt = $pdo->prepare($query);
            $stmt->execute([$email, $password]);
            //Fim do prepare stetament

            $pdo = null;
            $stmt = null;
            header("Location:../index.php");

            die();
        } catch (PDOException $e) {
            die("Query failed: ". $e->getMessage());
        }
    } else {
        header("Location:../index.php");
    }