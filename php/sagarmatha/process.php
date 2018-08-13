<?php 
    include 'init.php';

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //add
        if(isset($_POST['action'])and $_POST['action'] == 'add')
        {
            //echo "Add process";

            $event_title= mysqli_escape_string($conn,$_POST['event_title']);
            $event_description = mysqli_escape_string($conn,$_POST['event_description']);

            //blank check diy

            $sql = "insert into events (event_title,event_description,event_date)values ('$event_title','$event_description',now())";//now displays the date

            mysqli_query($conn,$sql);

        }
            //edit
            else if(isset($_POST['action']) and $_POST['action'] == 'edit')
            {
                //echo "Edit process";
                $event_title=mysqli_escape_string($conn,$_POST['event_title']);
                $event_description=mysqli_escape_string($conn,$_POST['event_description']);
                $id = (int)$_POST['id'];

                $sql="update events set event_title = '$event_title',event_description='$event_description' where id = $id";
                
                mysqli_query($conn,$sql);
            }
            
            //delete

            else if(isset($_POST['action']) and $_POST['action'] == 'delete')
            {
                $id = (int)$_POST['id'];

                $sql="delete from events where id=$id ";
                // echo $sql;
                // exit;
                mysqli_query($conn,$sql);
            }
        
    }
    header('location:index.php');