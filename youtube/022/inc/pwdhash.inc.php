<?php 
    $pwd = $_POST["password"];
    
    $options = [
        "cost" => 12
    ];

    $hashPwd = password_hash($pwd, PASSWORD_DEFAULT, $options);

    