<?php
    declare(strict_types=1);

    function get_user_if_exist(object $pdo, string $username) {
        $query = "SELECT username FROM users WHERE username = :username;";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":username", $username);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($result == $username) {
            return true;
        } else {
            return false;
        }
    }

    function get_user_pwd (object $pdo, string $pwd, string $username) {

        $query = "SELECT username, pwd FROM users WHERE username = :username; AND pwd = :pwd";

        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":pwd", $pwd);
        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($results as $hash) {
            $result = password_verify($pwd, $hash['pwd']);
        }

        return $result;
    }