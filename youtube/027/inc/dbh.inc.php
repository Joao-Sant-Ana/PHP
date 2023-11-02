<?php

    $dsn = "mysql:host=localhost;dbname=php_estudo";
    $dbusername = "root";
    $dbpassword = "";

    try {
        //"$pdo" = "PHP data object". Mais flexivel caso não seja mysql.
        $pdo = new PDO($dsn, $dbusername, $dbpassword);
        $pdo ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "<h1>Connection failed: " . $e->getMessage() . "</h1>";
    }