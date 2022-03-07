<?php
    $arr = array("Pen"=>"write","Eraser"=>"remove","Book"=>"read");
    $arr2 = array("Water"=>"drink","Food"=>"eat");
    echo "<h3>Array before Merge</h3>";
    var_dump($arr);
    var_dump($arr2);
    $result= array_merge($arr,$arr2);
    echo "<h3>Array after Merge</h3>";
    var_dump($result);