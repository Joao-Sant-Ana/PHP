<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $pwd = $_POST["pwd"];

        try {
            require_once "../Classes/Dbh.php";
            require_once "../Classes/Signup.php";


            $signUpUser = new signup($username, $pwd);
            $signUpUser->signupUser();

        } catch (PDOException $e) {
            header("Location: ../index.php");
            die("Query failed: " . $e->getMessage());
        }
    }