<?php
    $arr = array("Hello", "World", "I am", "Using", "PHP");
    var_dump($arr);
    var_dump(array_slice($arr,2,3));  //returns new array containing 3 consecutive elements from index 2.     
    var_dump($arr);
    var_dump(array_splice($arr,2,1)); //returns    