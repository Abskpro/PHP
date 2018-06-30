<?php

$fruits=['apples','pears','peach','orange'];
//var_dump($fruits).'<br>';
//foreach($fruits as $fruits):
  //  echo $fruits.'<br>';
    //endforeach;
foreach($fruits as $key=>$value)://here in place of key any name can be used
    echo $key.":".$value.'<br>';
endforeach;
