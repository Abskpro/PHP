<?php   session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>login</h1>
    <?php
    if(isset($_SESSION['err']))
    {
        echo $_SESSION['err'];
        unset($_SESSION['err']);

    }
    ?>
    <form action="process.php" method="post">
    <p>
    Username:<input type="text" name="uname">
    </p>
    <p>
    Password:<input type="password" name="pass">
    </p>
    <input type="submit" value="login">
    </form>

</body>
</html>
    