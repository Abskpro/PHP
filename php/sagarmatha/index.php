<?php 
    include 'init.php';
    $events = all('events');//events=tablename//it is also the function call
    //var_dump($events);
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
    <h1>All events</h1>
    <a href="add.php">Add</a>
    <?php foreach($events as $event): ?>
        <article>
            <h3><?php echo $event['event_title'] ?></h3>
            <span><?php echo $event['event_date'] ?></span>
            <a href="details.php?id=<?php echo $event['id']; ?>">Read more</a>
            <br>
            <form action="process.php" method="post">
                <input type="hidden" name="id" value="<?php echo $event['id']; ?>">
                <input type="submit" value="Delete">
                <input type="hidden" name="action" value="delete">
             </form>
             <a href="edit.php?id=<?php echo $event['id']; ?>">Edit</a>
        </article>
        <hr>
<?php endforeach; ?>    
</body>
</html>