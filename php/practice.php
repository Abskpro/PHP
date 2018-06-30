<?php
    $fruits=['apple','banana','grapes','peach','plum'];
    $sitelogin=[//creating an array for assigning the site to the html files
        "google"=>"https://google.com",
        "facebook"=>"https://facebook.com",
        "youtube"=>"https://youtube.com"
    ];
    echo $fruits[3];//prints peach of array $fruits
   /* if($fruits==null)//just a simple if else statement
    { 
        echo "it is empty";
    }
    else
    {
         echo "not null".'<br>';
    }*/
    foreach($fruits as $n)//printing all the values of the array fruits
    {
        echo $n.'<br>';
    }
    $newArray=array_map (function($value){//concatnate on every element of array
        return $value ." i eat";
    },$fruits);
   var_dump($newArray);
       // var_dump($fruits);//dumps all the value of the array and their respective size and datatype
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
            <?php
            foreach($sitelogin as $key=>$value):
             ?>
            <ul>
            </style>
            <li ><a href="<?php echo $value ?>"><?php echo $key ?></a></li>
            </ul>
                <?php
                endforeach;
                ?>
                
        </body>
        </html>
 