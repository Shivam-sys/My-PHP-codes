<?php
    $arr = array("Pen"=>"write","Eraser"=>"remove","Book"=>"read");
    $arr2 = array_flip($arr);
    echo "<h3>Array before flip<br>";
    var_dump($arr);
    echo "Array after flip<br>";
    var_dump($arr2);