<?php

$fruits=['apples','pears','peach'];
for($i=0;$i<count($fruits);$i++){
    echo $fruits[$i].'<br>';
}
/*echo $fruits[0];
$fruits[2]="grapes";//pushes value grapes in array 2
unset($fruits[0]);//removes the value
echo "<pre>";
var_dump($fruits);//dumps all the value in the array*/


//advanced for loop
foreach($fruits as $n){
    echo $n.'<br>';
}