<?php
        session_start();
        if(!isset($_SESSION['isLoggedin']))
        {
            header('location:index.php');
        }
        ?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1> Add new article </h1>
    <form action="add.php" method="post">
    <p>
            Title:<input type="text" name="title">
    </p>
    <p>
            Description:<br>
            <textarea name="description" id="" cols="60" rows="5"></textarea>
            </p>
            <input type="submit" value="Add">
            <a href="logout.php"></a>
            <input type="submit" value="logout">
            </form>        
    </body>
</html>