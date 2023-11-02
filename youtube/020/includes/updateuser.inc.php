<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $email = $_POST["email"];

        try {
            require_once "dbh.inc.php";

            //Prepare stetament
            $query = "UPDATE usuarios SET username = ?, pwd = ?, email = ? WHERE id = 3;";
            $stmt = $pdo->prepare($query);
            $stmt->execute([$username, $password, $email]);
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