<?php   
        include 'init.php';
        if(isset($_GET['id']))
        {
            $event = find('events',$_GET['id']);
            //var_dump ($event);
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
    <form action="process.php" method="post">
        <h1>Edit events</h1>
        <p>
            Event Title: <input value="<?php echo $event['event_title']; ?>" type="text" name="event_title">
        </p>
        <p>    
            Event Description: <br>
            <textarea name="event_description" cols="60" rows="5"><?php echo $event['event_description']; ?></textarea>
        </p>
        <input type="hidden" name="id" value="<?php echo $event['id'] ?>">
        <input type="hidden" name="action" value="edit">
        <input type="submit" value="Edit">
    </form>
</body>
</html>