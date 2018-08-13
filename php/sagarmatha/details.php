<?php
    include 'init.php';
    if(isset($_GET['id']))
    {
       $event=find('events',$_GET['id']);
        //var_dump($event);
    }
    else
    {
        header('location:index.php');
    }
?>    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $event['event_title']; ?><h1>
    <span><?php echo $event['event_date'] ?></span> <br>
    <?php echo $event['event_description']; ?>
</body>
</html> 