<?php
        session_start();
        if(isset($_POST['uname'],$_POST['pass']))// isset is used to check whether a variable is set or not.
        {
            $username=$_POST['uname'];
            $password=$_POST['pass'];

            if(empty($username) || empty($password))
            {
                $_SESSION['err']="both field are required";
                header('location:index.php');
            }
            else{
                if($username=='admin' && $password=='admin')
                {
                    //logged in
                    $_SESSION['isLoggedin']=true;
                    header('location:insert_form.php');
                }
                else{
                    $_SESSION['err']="incorrrect information";
                    header('location:index.php');
                }
            }
            //echo "ok";
        }
        else{
            //redirect
            $_SESSION['err']="invalid attempt";
            header('location:index.php');
        }
        