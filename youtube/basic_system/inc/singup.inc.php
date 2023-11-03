<?php 
//MVC model
    if($_SERVER['request_method'] == 'POST') {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        try {
            require_once "dbh.inc.php";
            require_once "signup_model.inc.php";
            require_once "signup_contr.inc.php";


            //ERROS HANDLERS
            $errors = [];
            if(is_input_empty($username, $password, $email)) {
                $errors["empty_input"] = "Fill in all fields";
            }

            if (is_email_invalid($email)) {
                $errors["invalid_email"] = "invalid email";
            }

            if (is_username_taken($pdo, $username)) {
                $errors["username_taken"] = "Username already taken!";
            }

            if (is_email_registred($pdo, $email)) {
                $errors["email_used"] = "Email already registred";
            }

            require_once "config_session.inc.php";

            if ($errors) {
                $_SESSION['error_signup'] = $errors;
                header("Location: ../index.php");
            }

        } catch (PDOException $e) {
            die("Query failed: " . $e->getMessage());
        }

    } else {
        header("Location: ../index.php");
        die();
    }