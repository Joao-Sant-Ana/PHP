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

            $result = get_user($pdo, $username);

            if (is_username_wrong($result, $pdo, $username)) {
                $errors["ERROR_0"] = "Invalid data!";
            }

            if (!is_username_wrong($result, $pdo, $username) && is_password_wrong($password, $result["pwd"])) {
                $errors["ERROR_1"] = "Invalid data!";
            }


            if($errors) {
                $_SESSION["error_login"] = $errors;
                header("Location: ../index.php");
                die();
            }

            $newSessionId = session_create_id();
            $sessionId = $newSessionId . "_" . $result["id"];
            session_id($sessionId);

            $_SESSION["user_id"] = $result["id"];
            $_SESSION["user_username"] = htmlspecialchars($result["username"]);

            $_SESSION['last_regeneration'] = time();

            header("Location: ../index.php?login=succes");
            $pdo = null;
            $stmt = null;

            die();
        } catch (PDOException $e) {

            die("Query failed: " . $e->getMessage());
        }
    } else {
        die();
        header("Location: ../index.php");
    }