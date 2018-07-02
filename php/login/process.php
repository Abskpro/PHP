<?php 
        //echo "process confirmed";
       // var_dump($_POST);
       // var_dump($_POST);

       include 'config.php';

        if(isset($_POST['name'],$_POST['pass']))
        {
            //echo "gtg";
            $userName=$_POST['name'];
            $userPass=$_POST['pass'];

            if(empty($userName) or empty($userPass))
            {
                header('location:index.php?msg=false');
            }
            else{
                if($userName==$loginname and $userPass == $password)
                {
                    echo "hello ".$userName."jbhaypani";
                }
                else{
                    header('location:index.php?msg=invalid_details');
                }
            }

        }
        else{
            //echo "invalid request method";
            header('location:index.php');
        }

        