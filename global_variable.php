<?php
    function global_var(){
        global $a;
        $a = 10;
        $a++;
        echo "I am a global variable: $a (access inside function)";
    }
    global_var();
    echo "<br>Outside function: $a";
    ?>