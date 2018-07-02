<?php
        session_start();
        if(isset($_POST['name'],$_POST['pass']))
        {
            echo "ok";
        }
        else{
            //redirect
            $_SESSION['err']="invalid attempt";
            header('location:index.php');
        }
        