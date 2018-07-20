<?php 
        session_start();
        include 'connection.php';
        if(!isset($_SESSION['loginId']))
        {
            header('location:index.php');
        }
        //var_dump($_POST);
        //var_dump($_FILES);//files is a 2d array

            if(isset($_POST['title'],$_POST['description'],$_FILES['image']))
            {
                $title=mysqli_escape_string($conn,$_POST['title']);
                $description=mysqli_escape_string($conn,$_POST['description']);
                $imageName=$_FILES['image']['name'];
                $userId=$_SESSION['loginId'];
                
                $allowedExtension=['png','jpg','jpeg'];
                $extension=pathinfo($imageName,PATHINFO_EXTENSION);
                $extension=strtolower($extension);

                if(!in_array($extension,$allowedExtension))
                {
                    echo "Invalid file";
                    exit;
                }

                move_uploaded_file($_FILES['image']['tmp_name'],"upload/$imageName");

                $sql="insert into articles (title,description,image,user_id) values ('$title','$description','$imageName','$userId')";
                mysqli_query($conn,$sql);

            }
            header('location:view_articles.php');