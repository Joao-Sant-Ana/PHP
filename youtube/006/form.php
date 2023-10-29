<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Document</title>
</head>
<body>
    <main>
        <form action="./formhandler.php" method="post">
            <label for="firstname">First name?</label>
            <input type="text" id="firstname" name="firstname" placeholder="firstname">

            <label for="lastname">Last name?</label>
            <input type="text" id="lastname" name="lastname" placeholder="lastname">

            <label for="favpet">Favourite pet?</label>
            <select name="favpet" id="favpet">
                <option value="none">none</option>
                <option value="cat">Cat</option>
                <option value="dog">Dog</option>
                <option value="snake">Snake</option>
                <option value="bird">Bird</option>
            </select>
            <input type="submit" id="btn">
            <?php 
                $uwu = "uwu";

            ?>
        </form>
    </main>
</body>
</html>