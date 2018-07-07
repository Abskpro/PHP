<?php

    include 'connection.php';

    //sql statement
   
    // $selectSql="select * from articles";
      
      $selectSql="select * from articles order by id desc";
    //execute sql statement

    $sqlExecute=mysqli_query($conn,$selectSql);

    $article3=[];

    //var dump($sqlExecute);

    //$data=mysqli_fetch_assoc($sqlExecute);

    while($data= mysqli_fetch_assoc($sqlExecute)){
        //var_dump($data);
        $articles[] = $data;
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
        <h1>Article3</h1>
        <?php foreach($articles as $article){
        ?>
            <h3><?php echo $article['title']; ?></h3>
            <p>
            <?php echo $article['description']; ?>
            </p>
            <a href="delete.php?id=<?php echo $article['id'];?>"onclick="return confirm('article')" >Delete</a>
            <hr>
            <?php }?>
    </body>
    </html>