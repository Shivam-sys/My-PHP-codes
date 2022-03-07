<?php
    echo "Present rolls nos. <br>";
    $i = 0;
    while($i<20){
        $i++;
        if($i==13 || $i==9 || $i==16){
            continue;
        }
        echo $i."<br>";
    }
?>