<?php

    //php mysql connection

    //hostname,username,password,dbname 

    $conn=mysqli_connect("localhost","root","","sagarmatha_csit");
    
    if(!$conn)
    {
        die("error");
    }
    