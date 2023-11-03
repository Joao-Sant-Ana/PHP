<?php
    declare(strict_types=1);

    require_once "config_session.inc.php";

    function check_signup_errors() {
        if (isset($_SESSION["error_signup"])) {
            $errors = $_SESSION["error_signup"];

            echo "<br>";

            foreach ($errors as $error) {
                echo "<p>" . $error . "</p>";
                echo "<br>";
            }

            unset($_SESSION["error_signup"]);
        } else if (isset($_GET["signup"])) {
            echo "<p>Deu certo</p>";
        }
    }
