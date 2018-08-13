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
        <h1>Add new events</h1>
        <p>
            Event Title: <input type="text" name="event_title">
        </p>
        <p>    
            Event Description: <br>
            <textarea name="events_description" cols="60" rows="5"></textarea>
        </p>
        <input type="hidden" name="action" value="add">
        <input type="submit" value="Add">
    </form>
</body>
</html>