<?php

        include 'connection.php';

        if(isset($_POST['title'],$_POST['description']))
        {
            //blank validation(DIY)or at least try
            $title=mysqli_escape_string($conn,$_POST['title']);
            $description=mysqli_escape_string($conn,$_POST['description']);
            //insert into tablename(field1,field2..) values ('values1','values2'...)
           
            $insertSql="insert into articles (title,description) values ('$title','$description')";
            mysqli_query($conn,$insertSql);
            header('location:select.php');
            }
        else{
            header('location:insert_form.php');
        }