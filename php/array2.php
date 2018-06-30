<?php   
        
        $student1=[
                "name"=>"Abhishek Karmacharya",
                "college"=>"SMC",
                "address"=>"Saugal",   
                "age"=>20 
        ];   
       //
        $student1['roll']=2;
        $student1['name1']="sushil";
       // var_dump($student1);
        foreach($student1 as $key=>$value):
            echo $key.":".$value.'<br>';
        endforeach;
        
?>
<!DOCTYPE   <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    
</body>
</html>