<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <h1>Registration</h1>
        <?php
            if(isset($_SESSION['err']))
            {
                foreach($_SESSION['err'] as $error){
                    echo $error.'<br>';
                }
                unset($_SESSION['err']);
            }
            if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
        ?>    
        <form action="process.php" method="POST">
        <p>
            Name:<input type="text" name="name">
            </p>
        <p>
            Email:<input type="email" name="email">
            </p>
        <p>
            Password:<input type="password" name="pass">
            </p>  
        <p>
            Re-Password:<input type="password" name="rpass">
            </p> 
            <input type="submit" value="Register">
        </form> 
        
      
</body>
</html>