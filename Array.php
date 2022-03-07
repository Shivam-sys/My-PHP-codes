<?php
    $arr = array("Hi","I'm",20,"Years","Old");
    echo "<h2>".implode(" ",$arr)."</h2>";
    echo "<h3><hr>First element: ".$arr[0];
    echo "<br>second element: ".$arr[1];
    echo "<br>Third element: ".$arr[2];
    echo "<br>Fourth element: ".$arr[3];
    echo "<br>Fifth element: ".$arr[4];
    echo "<hr>Using var_dump()<br>";
    echo var_dump($arr)."<hr>";
    $arr2d = array(
        array("ABC",3,4),
        array("CVM",5,6),
        array("SAB",7,8),
    );
    // echo $arr2d[0][0];
    for($i=0;$i<3;$i++){
        echo "<br>";
        for($j=0;$j<3;$j++){
            echo $arr2d[$i][$j]."  ";
        }
    }
?>