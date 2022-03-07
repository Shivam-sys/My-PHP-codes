<?php
    $arr = array("Pen"=>"write","Eraser"=>"remove","Book"=>"read");
    echo "<h2>Before flip</h2>";
    foreach($arr as $key=>$val){
        echo "$key => $val"."<br>";
    }
    $arr2 = array_flip($arr);
    echo "<h2>After flip</h2>";
    foreach($arr2 as $key=>$val){
        echo "$key => $val"."<br>";
    }