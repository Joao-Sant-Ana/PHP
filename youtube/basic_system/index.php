<?php 
    require_once "inc/config_session.inc.php";
    require_once "inc/signup_view.inc.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
        <h1>Login</h1>
        <form action="" method="POST">
            <input type="text" name="username" placeholder="name">
            <input type="password" name="password" placeholder="password">
            <input type="submit" value="submit">
        </form>
        <h1>Sign up</h1>
        <form action="inc/singup.inc.php" method="POST">
            <input type="text" name="username" placeholder="name">
            <input type="text" name="email" placeholder="email">
            <input type="password" name="password" placeholder="password">
            <input type="submit" value="submit">           
        </form>
    </div>
    <?php
        check_signup_errors();
    ?>
</body>
</html>