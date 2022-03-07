<?php
    $arr1 = array("i1" => "v1","i2"=>"v2");
    $arr2 = array("i2" => "v2","i1"=>"v1");
    $arr3 = array("i1" => "v2","i2"=>"v1");
    $arr4 = array("i1" => "v1","i2"=>"v2");

    echo ($arr1===$arr2)? "Identical":"Non-Identical"."<br>";
    echo ($arr1===$arr3)? "Identical":"Non-Identical"."<br>";
    echo ($arr2===$arr3)? "Identical":"Non-Identical"."<br>";
    echo ($arr1===$arr4)? "Identical":"Non-Identical"."<br>";