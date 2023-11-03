<?php 
    $dbh = "mysql:host=localhost;dbname=php_estudo";
    $dbusername = "root";
    $dbpassword = "";

    try {
        $pdo = new PDO($dbh, $dbusername, $dbpassword);
        $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "<h1>Connection failed: " . $e->getMessage() . "</h1>";
        die();
    }