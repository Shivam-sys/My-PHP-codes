<?php
    echo "<h3>Here starts the loop</h3>";
    for($i = 0; $i<10; $i++){
        if($i==7){
            die("<br><font color='red'>Let the loop die at iteration 7</font>");
        }
        echo "<br><h2>i: ".$i ."</h2>";
    }
    echo "Out of loop";
    echo "Anything written";
?>