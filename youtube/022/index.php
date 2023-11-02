<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="inc/formhandler.inc.php" method="post">
        <input type="text" name="email" placeholder="email">
        <input type="text" name="username" placeholder="name">
        <input type="password" name="password" placeholder="password">
        <input type="submit" value="submit">
    </form>
    <form action="inc/login.inc.php" method="post">
        <h1>logar</h1>
        <input type="text" name="email" placeholder="name">
        <input type="password" name="password" placeholder="password">
        <input type="submit" value="submit">
    </form>
</body>
</html>