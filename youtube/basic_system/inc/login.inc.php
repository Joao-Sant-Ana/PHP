<?php 

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];


        try {
            require_once "dbh.inc.php";
            require_once "login_model.inc.php";
            require_once "login_contr.inc.php";
            require_once "config_session.inc.php";

            //ERROR HANDLERS
            $errors = [];
            if(is_input_empty($username, $password)) {
                $errors["empty_input"] = "Fill in all fields";
            }
            if(verify_username_exist($pdo, $username)) {
                $errors["Invalid_username"] = "Invalid data1!";
            }
            if(verify_account($pdo, $username, $password)) {
                $errors["Invalid_data"] = "Invalid data2!";
            }


            if($errors) {
                $_SESSION["error_login"] = $errors;
                header("Location: ../index.php");
                die();
            }

            header("Location: ../index.php?login=succes");

            $pdo = null;
            $stmt = null;

        } catch (PDOException $e) {

            die("Query failed: " . $e->getMessage());
        }
    } else {
        die();
        header("Location: ../index.php");
    }