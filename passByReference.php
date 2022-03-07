<?php
    echo "<h1>Pass by reference</h1>";
    $age = 20;
    function birthday(&$val){
        $val+=1;
    }
    echo "Age before birthday: $age";
    birthday($age);
    echo "<br>Age after birthday: $age";
?>
