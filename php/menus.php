<?php
$menus=[
    "facebook"=>"https://facebook.com",
    "google"=>"https://google.com",
    "yahoo"=>"https://yahoo.com",
];
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
    <ul>
    <?php 
    foreach ($menus as $key=>$value):
        ?>
  <li><a href="<?php echo $value ?>"><?php echo $key ?></a></li>
    
    <?php
    endforeach;
    ?>
    <li><a href="">Faq</a></li>
    <li><a href="">Gallery</a></li>
    </ul>
</body>
</html>
<ul>
(li>a)*4