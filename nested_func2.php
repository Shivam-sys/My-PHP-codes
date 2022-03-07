<?php
    echo "<h2>Nested function</h2>";
    function outer($a){
        function inner($b){
            echo "<br>three, $b";
        }
        echo "$a, two";
    }

    outer("one");
    inner("four");