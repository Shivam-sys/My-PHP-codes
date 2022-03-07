<?php
    $arr1 = array('mango','banana');
    $arr2 = array('apple','banana');
    $arr3 = array(0=>'mango', 1=>'banana');

    function check_eq($a1,$a2){
        echo"<br> Checking .. <br>[".implode(", ",$a1)."] And [".implode(", ",$a2)."]<br>";
        return ($a1==$a2) ? "Equal" : "Not equal";
    }
    
    echo "<h3>".check_eq($arr1,$arr2)."</h3>";
    echo "<h3>".check_eq($arr2,$arr1)."</h3>";
    echo "<h3>".check_eq($arr1,$arr3)."</h3>";
    echo "<h3>".check_eq($arr3,$arr1)."</h3>";
    echo "<h3>".check_eq($arr2,$arr3)."</h3>";
    echo "<h3>".check_eq($arr3,$arr2)."</h3>";
?>
