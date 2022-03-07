<?php
    echo "<h2>Nested function in PHP</h2><h2>";
    function outer($x){
        $val = $x;
        function inner(){
            echo "<br>From inner function, val: $val";
            echo "<br>From inner function, x: $x</h2>";

        }
        echo "<h2>From Outer function, val: $val</h2>";
        echo "<h2>From Outer function, x: $x</h2>";
    }
    outer (100);
    echo "<h2>Now calling inner</h2>";
    inner();
    ?>