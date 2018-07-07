<?php
        include 'connection.php';
        if(isset($_GET['id']))
        {
            $id=(int)$_GET['id'];
            $deleteSql="delete from articles where id=$id";
            mysqli_query($conn,$deleteSql);
        }
        header('location:select.php');