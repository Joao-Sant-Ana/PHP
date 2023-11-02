<?php
    require_once "dbh.inc.php";
    $email = $_POST['email'];
    $pwd = $_POST['password'];


    $sql = "SELECT pwd FROM usuarios WHERE email = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$email]);
    
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);


    foreach($result as $hashPwd) {
        $verification = password_verify($pwd, $hashPwd['pwd']);
    }
