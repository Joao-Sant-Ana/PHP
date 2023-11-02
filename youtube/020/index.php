<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="includes/formhandler.inc.php" method="POST">
        <h1>Singup</h1>
        <input type="text" name="username" placeholder="username">
        <input type="password" name="password" placeholder="password">
        <input type="text" name="email" placeholder="email">
        <input type="submit" value="submit">
    </form>
    <form action="includes/deleteuser.inc.php" method="POST">
        <h1>Deletar conta</h1>
        <input type="text" name="email" placeholder="email">
        <input type="password" name="password" placeholder="password">
        <input type="submit">
    </form>
    <form action="includes/updateuser.inc.php" method="POST">
        <h1>Alterar conta</h1>
        <input type="text" name="username" placeholder="username">
        <input type="password" name="password" placeholder="password">
        <input type="text" name="email" placeholder="email">
        <input type="submit" value="submit">
    </form>
</body>
</html>