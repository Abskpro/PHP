<?php 
        //echo "process confirmed";
       // var_dump($_POST);
        var_dump($_POST);
        if(isset($_POST['name'],$_POST['email']))
        {
            $name=$_POST['name'];
            $email=$_POST['email'];
            echo "Hello ".$name." . chai pilo";
        }
        else{
            echo "invalid request method";
        }

        ?>