<?php

    include 'connection.php';

    //sql statement
    $selectSql="select * from users";

    //execute sql statement

    $sqlExecute=mysqli_query($conn,$selectSql);

    //var dump($sqlExecute);

    //$data=mysqli_fetch_assoc($sqlExecute);

    while($data= mysqli_fetch_assoc($sqlExecute)){
        var_dump($data);
    }