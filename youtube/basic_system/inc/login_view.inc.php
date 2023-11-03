<?php
    declare(strict_types=1);

    require_once "config_session.inc.php";

    function check_login_errors() {
        if (isset($_SESSION["error_login"])) {
            $errors = $_SESSION["error_login"];

            echo "<br>";

            foreach ($errors as $error) {
                echo "<p>" . $error . "</p>";
                echo "<br>";
            }

            unset($_SESSION["error_login"]);
        } else if (isset($_GET["login"])) {
            echo "<p>Deu certo</p>";
        }
    }