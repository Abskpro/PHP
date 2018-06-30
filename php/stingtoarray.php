<?php
        $item='Momo,books,tea,chowmein';
        $fruits=["a"=>'apples',"b"=>'pears',"c"=>'peach',"d"=>'orange'];
        $item=explode(',',$item);//implode to vice versa
        $fruits=implode(' ',$fruits);
        var_dump($fruits);
        echo '<br>';
        echo '<br>';
        var_dump($item);

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
    
</body>
</html>